<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once(dirname(__FILE__) . '/../../../wp-load.php');

// verify email domain function
function isPublicEmailDomain($email)
{
    $email = strtolower(trim($email));
    $domain = substr(strrchr($email, "@"), 1);
    global $wpdb;
    $table = 'listed_domains';
    $blockedDomains = $wpdb->get_col("SELECT domain FROM $table WHERE status = 'Active'");
    if (in_array($domain, $blockedDomains)) {
        return true;
    }
    return false;
}

// sendError function
function sendError($statusCode, $message)
{
    echo json_encode(["st" => $statusCode, "msg" => $message]);
    exit;
}

// Function to extract and modify the home URL based on the subdomain
function getHomeUrl()
{
    $requestUri = $_SERVER['REQUEST_URI'];
    $subdomainPath = dirname($requestUri);
    $subdomain = trim($subdomainPath, '/');
    $defaultHome = "https://360smsapp.com/spark-conversation";
    if (!empty($subdomain)) {
        return "https://360smsapp.com/{$subdomain}";
    } else {
        return $defaultHome;
    }
}

// 1. invalid request logic
if (isset($_SERVER['HTTP_REFERER']) && ($_SERVER['HTTP_ORIGIN'] == "https://" . $_SERVER['HTTP_HOST'])) {
    session_start();

    // 2. Validate required fields and perform checks
    if (isset($_REQUEST['vercode'])) {
        if (empty($_REQUEST['vercode'])) {
            sendError(2, "Required Field");
        } else {
            $vercode       = trim((string) wp_unslash($_REQUEST['vercode']));
            $captcha_valid = false;

            if (! empty($_REQUEST['captcha_id'])) {
                $captcha_key = sanitize_text_field(wp_unslash($_REQUEST['captcha_id']));
                if (strpos($captcha_key, 'cpm_') === 0) {
                    $expected = get_transient('cpm_captcha_' . $captcha_key);
                    if ($expected !== false && $vercode === (string) $expected) {
                        $captcha_valid = true;
                        delete_transient('cpm_captcha_' . $captcha_key);
                    }
                }
            }

            if (! $captcha_valid) {
                $captcha_key = ! empty($_REQUEST['captcha_id'])
                    ? sanitize_text_field(wp_unslash($_REQUEST['captcha_id']))
                    : sanitize_text_field(wp_unslash($_REQUEST['pageid'] ?? ''));
                if (
                    isset($_SESSION['captcha_total'][$captcha_key]['captcha_total'])
                    && $vercode === (string) $_SESSION['captcha_total'][$captcha_key]['captcha_total']
                ) {
                    $captcha_valid = true;
                }
            }

            if (! $captcha_valid) {
                sendError(2, "Invalid Captcha");
            }
        }
    }

    // Check if google reCAPTCHA is implemented
    if (isset($_REQUEST['g-recaptcha-response'])) {
        if (!empty($_REQUEST['g-recaptcha-response'])) {
            $api_url = 'https://www.google.com/recaptcha/api/siteverify';
            $resq_data = array(
                'secret' => '6Lcz1TMrAAAAAJmh-grsMqAfmSicehM-xly5qdWd',
                'response' => $_REQUEST['g-recaptcha-response'],
                'remoteip' => $_SERVER['REMOTE_ADDR']
            );
            $curlConfig = array(
                CURLOPT_URL => $api_url,
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS => $resq_data,
                CURLOPT_SSL_VERIFYPEER => false
            );
            $ch = curl_init();
            curl_setopt_array($ch, $curlConfig);
            $response = curl_exec($ch);
            if (curl_errno($ch)) {
                $api_error = curl_error($ch);
            }
            curl_close($ch);
            $responseData = json_decode($response);
            if (!empty($responseData) && $responseData->success) {
            } else {
                sendError(5, "The reCAPTCHA verification failed, please wait and try again.");
            }
        } else {
            sendError(5, "Please check the reCAPTCHA checkbox.");
        }
    }

    // Continue with other validations
    $company = empty($_REQUEST['company']) ? "360dc" : $_REQUEST['company'];
    if (empty($_REQUEST['last_name'])) {
        sendError(3, "Required Field");
    } elseif (empty($_REQUEST['email'])) {
        sendError(4, "Required Field");
    } elseif (empty($company)) {
        sendError(5, "Required Field");
    } elseif (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
        sendError(4, "The Email must contain a valid email address.");
    } else {
        // Allow public emails on paid-campaign pages for [contact_pageshortcode]
        $allow_public_email_pages = [67413, 67501, 68015, 67530, 67660, 67671, 67676, 67680, 67700, 67678];
        $allow_public_email = in_array((int) ($_REQUEST['pageid'] ?? 0), $allow_public_email_pages, true)
            || ! empty($_REQUEST['allow_public_email']);

        if (isPublicEmailDomain($_REQUEST['email']) && ! $allow_public_email) {
            sendError(4, "Please enter your business email address. This form does not accept addresses from public/free domains.");
        }

        if (isset($_REQUEST['first_name'])) {
            $first_name = strip_tags($_REQUEST['first_name']);
            $first_name = htmlspecialchars($first_name);
            if (!preg_match("/^[a-zA-Z-' ]+$/", $first_name)) {
                sendError(9, "Invalid input");
            }
        }

        $last_name = strip_tags($_REQUEST['last_name']);
        $last_name = htmlspecialchars($last_name);
        if (!preg_match("/^[a-zA-Z-' ]+$/", $last_name)) {
            sendError(3, "Invalid input.");
        }

        // 4. email verify logic (skip for contact_pageshortcode public-email pages)
        require_once(dirname(__FILE__) . '/../../../wp-load.php');

        function decrypt_data($encrypted)
        {
            return openssl_decrypt($encrypted, ENCRYPTION_METHOD, SECRET_KEY, 0, SECRET_IV);
        }

        global $wpdb;
        $table = $wpdb->prefix . 'api_token';
        $row = $wpdb->get_row("SELECT * FROM $table LIMIT 1");

        if ($row) {
            $org_id       = decrypt_data($row->org_id);
            $bearer_token = decrypt_data($row->bearer_token);
            $sid          = decrypt_data($row->sid);
            $token        = decrypt_data($row->token);
        } else {
            sendError(4, "No data found, please contact support.");
        }

        if (! $allow_public_email) {
            $email = $_REQUEST['email'];
            $curl  = curl_init();
            $data  = json_encode(['email' => $email]);
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://verify.360degreeapps.com/verifyEmailv1.php',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => array(
                    'Orgid: ' . $org_id,
                    'Authorization: Bearer ' . $bearer_token,
                    'Content-Type: application/json'
                ),
            ));
            $response = json_decode(curl_exec($curl), true);
            curl_close($curl);

            if (!empty($response["result"]) && ($response["result"] == "undelivered" || $response["result"] == "undeliverable" || isset($response["sendex"]) && $response["sendex"] < 0.70)) {
                sendError(4, "Sorry, the email is not valid!");
            }
        }

        // 5. phone no verify logic
        $phone_status = "true";
        $debugInfo    = []; // DEBUG

        if (!empty($_REQUEST['phone'])) {
            $phone    = $_REQUEST['phone'];
            $postData = [
                "Number"      => $phone,
                "Type"        => "caller-name",
                "Type_option" => "carrier"
            ];
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL            => 'https://verify.360degreeapps.com/checkNumberv1.php',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING       => '',
                CURLOPT_MAXREDIRS      => 10,
                CURLOPT_TIMEOUT        => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST  => 'POST',
                CURLOPT_POSTFIELDS     => json_encode($postData),
                CURLOPT_HTTPHEADER     => array(
                    'Orgid: ' . $org_id,
                    'Authorization: Bearer ' . $bearer_token,
                    'Content-Type: application/json'
                ),
            ));

            $rawResponse = curl_exec($curl);
            $curlErrNo   = curl_errno($curl);
            $curlError   = curl_error($curl);
            $httpCode    = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);

            $responsePhone = json_decode($rawResponse, true);

            // DEBUG: store info only, do NOT send response here
            $debugInfo = [
                'input_phone'      => $phone,
                'http_code'        => $httpCode,
                'curl_errno'       => $curlErrNo,
                'curl_error'       => $curlError ?: 'none',
                'raw_response'     => $rawResponse,
                'decoded_response' => $responsePhone,
            ];

            if (isset($responsePhone['Success']) && $responsePhone['Success'] == 1) {
                $phone_status = "true";
            } elseif (isset($responsePhone['error']['code']) && $responsePhone['error']['code'] == '20404') {
                $phone_status = "false";
            } else {
                $phone_status = "true"; // fail open for unexpected responses
            }

            $debugInfo['phone_status'] = $phone_status;
        }

        // ✅ Use sendError (not wp_send_json) to stay consistent with rest of file
        if ($phone_status == "false") {
            echo json_encode([
                "st"    => 6,
                "msg"   => "Sorry, the phone number is not valid!",
                "debug" => $debugInfo // DEBUG — remove after debugging
            ]);
            exit;
        }

        // 6. Other logic of company and utm
        $_REQUEST['oid'] = '00D61000000cnSO';

        $home      = getHomeUrl();
        $returnurl = $_REQUEST['retURL'] ?? '';
        $pageid    = $_REQUEST['pageid'];

        $c_url       = $_REQUEST['c_url'] ?? ($_SERVER['HTTP_REFERER'] ?? '');
        $queryString = parse_url($c_url, PHP_URL_QUERY);
        $queryParams = [];
        if (!empty($queryString)) {
            parse_str($queryString, $queryParams);
        }

        $utmParameters = [
            'utm_source'   => 'UTM_Source__c',
            'utm_medium'   => 'UTM_Medium__c',
            'utm_campaign' => 'UTM_Campaign__c',
            'utm_id'       => 'UTM_Id__c',
            'utm_term'     => 'UTM_Term__c',
            'utm_content'  => 'UTM_Content__c',
            'utm_device'   => 'UTM_Device__c',
            'campaignid'   => 'Campaign_ID__c',
            'adgroupid'    => 'Adgroup_ID__c',
            'creative'     => 'Creative_ID__c',

            // NEW FIELDS
            'gclid'        => 'GCLID__c',
            'gbraid'       => 'GBRAID__c'
        ];

        foreach ($utmParameters as $key => $field) {
            if (array_key_exists($key, $queryParams)) {
                $_REQUEST[$field] = $queryParams[$key];
            }
        }

        // Send the exact captured landing URL (same value as c_url) to Salesforce
        $_REQUEST['Full_Landing_Page_URL__c'] = esc_url_raw($c_url);

        if (empty($returnurl)) {
            $returnUrls = [
                49994 => "$home/wp-content/uploads/2023/02/manage-call-sessions.pdf",
                49976 => "$home/wp-content/uploads/2023/02/qualify-enquiries.pdf",
                49960 => "$home/wp-content/uploads/2023/02/resolve-cases-faster.pdf",
                49958 => "$home/wp-content/uploads/2023/02/seamless-telephony.pdf",
                49939 => "$home/wp-content/uploads/2023/02/call-management-at-scale.pdf",
                49949 => "$home/wp-content/uploads/2023/02/quick-and-timely-call-operation.pdf",
                49969 => "$home/wp-content/uploads/2023/02/reduce-missed-calls.pdf",
                49919 => "$home/wp-content/uploads/2023/02/case-study-2.pdf",
                49909 => "$home/wp-content/uploads/2023/02/email-reputation.pdf",
                49891 => "$home/wp-content/uploads/2023/02/real-time-verification.pdf",
                49986 => "$home/wp-content/uploads/2023/02/case-study-1.pdf"
            ];
            $returnurl = $returnUrls[$pageid] ?? "$home/thank-you.php";
        }

        unset($_REQUEST['vercode']);
        unset($_REQUEST['g-recaptcha-response']);
        $qs  = http_build_query($_REQUEST);
        $url = 'https://webto.salesforce.com/servlet/servlet.WebToLead?' . $qs;

        // 7. Log user data
        $email        = sanitize_email($_REQUEST['email']);
        $phone        = preg_replace('/[^\d\+]/', '', $_REQUEST['phone']);
        $ip           = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP) ?: '';
        $referer_url  = isset($_SERVER['HTTP_REFERER']) ? esc_url_raw($_SERVER['HTTP_REFERER']) : '';
        $salesforce_url = isset($url) ? esc_url_raw($url) : '';
        $user_agent   = isset($_SERVER['HTTP_USER_AGENT']) ? sanitize_text_field($_SERVER['HTTP_USER_AGENT']) : '';

        $urlData = [
            "referer_url"    => $referer_url,
            "salesforce_url" => $salesforce_url,
            "user_agent"     => $user_agent,
        ];

        $logData = [
            'ip'           => $ip,
            'email'        => $email,
            'phone'        => $phone,
            'created_at'   => current_time('mysql'),
            'json_payload' => wp_json_encode($urlData),
            'request_type' => 'valid',
        ];

        $wpdb->insert(
            'wp_lead_logs',
            $logData,
            ['%s', '%s', '%s', '%s', '%s', '%s']
        );

        // 8. Send data to Salesforce
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => 'POST'
        ]);
        $response = curl_exec($curl);
        $status   = curl_getinfo($curl, CURLINFO_RESPONSE_CODE);
        curl_close($curl);
        http_response_code($status);

        if ($status == 200) {
            $current_post_id   = isset($_REQUEST['pageid']) ? intval($_REQUEST['pageid']) : 0;
            $current_post_type = get_post_type($current_post_id);
            $current_post_slug = get_post_field('post_name', $current_post_id);

            if ($current_post_type === 'case_study') {
                echo json_encode([
                    "st"         => 1,
                    "msg"        => "Thanks for showing Interest!",
                    "url"        => "",
                    "case_study" => true,
                    "debug"      => $debugInfo // DEBUG — remove after debugging
                ]);
                exit;
            } else if ($current_post_type === 'playbook') {
                echo json_encode([
                    "st"         => 1,
                    "msg"        => "Thanks for showing Interest!",
                    "url"        => "",
                    "playbook" => true,
                    "debug"      => $debugInfo // DEBUG — remove after debugging
                ]);
                exit;
            } else if ($current_post_type === 'webinar') {
                echo json_encode([
                    "st"      => 1,
                    "msg"     => "Thanks for showing Interest! in Webinars",
                    "url"     => "",
                    "webinar" => true,
                    "debug"   => $debugInfo // DEBUG — remove after debugging
                ]);
                exit;
            } else if (in_array($current_post_id, [59372, 59139, 59132, 59141, 25315, 25336, 59154, 25351, 59358, 25321, 30312, 59376, 25289, 45028, 25345, 59374])) {
                echo json_encode([
                    "st"         => 1,
                    "msg"        => "Thanks for showing Interest! in User Guide",
                    "url"        => "",
                    "user-guide" => true,
                    "debug"      => $debugInfo // DEBUG — remove after debugging
                ]);
                exit;
            } else if ( $current_post_id === 67660 || $current_post_id === 67678  || $current_post_id === 67676 || $current_post_id === 67680 || $current_post_id === 67793) {
                echo json_encode([
                    "st"           => 1,
                    "msg"          => "Thanks for showing Interest!-Landing Page",
                    "url"          => esc_url_raw( home_url('/paid-zoho-thank-you/') ),
                    "landing-page" => true,
                    "debug"        => $debugInfo // DEBUG — remove after debugging
                ]);
                exit;
            } else if ($current_post_id === 67398 || $current_post_id === 67502 || $current_post_id === 67530 || $current_post_id === 67671 || $current_post_id === 67768  || $current_post_id === 67968 || $current_post_id === 67413 || $current_post_id === 67700  || in_array($current_post_slug, ['360-sms-app-for-salesforce-ppc'])) {
                echo json_encode([
                    "st"           => 1,
                    "msg"          => "Thanks for showing Interest!-Landing Page",
                    "url"          => esc_url_raw( home_url('/paid-thank-you/') ),
                    "landing-page" => true,
                    "debug"        => $debugInfo // DEBUG — remove after debugging
                ]);
                exit;
            } else {
                echo json_encode([
                    "st"      => 1,
                    "msg"     => "Data Submitted Successfully",
                    "url"     => $returnurl,
                    "webinar" => false,
                    "debug"   => $debugInfo // DEBUG — remove after debugging
                ]);
                exit;
            }
        } else {
            sendError(0, "Something went wrong, please try again later");
        }
    }
} else {

    require_once(dirname(__FILE__) . '/../../../wp-load.php');
    global $wpdb;
    $email       = isset($_REQUEST['email']) ? sanitize_email($_REQUEST['email']) : '';
    $phone       = isset($_REQUEST['phone']) ? preg_replace('/[^\d\+]/', '', $_REQUEST['phone']) : '';
    $ip          = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP) ?: '';
    $referer_url = isset($_SERVER['HTTP_REFERER']) ? esc_url_raw($_SERVER['HTTP_REFERER']) : '';
    $user_agent  = isset($_SERVER['HTTP_USER_AGENT']) ? sanitize_text_field($_SERVER['HTTP_USER_AGENT']) : '';

    $urlData = [
        "referer_url" => $referer_url,
        "user_agent"  => $user_agent
    ];

    $logData = [
        'ip'           => $ip,
        'email'        => $email,
        'phone'        => $phone,
        'created_at'   => current_time('mysql'),
        'json_payload' => wp_json_encode($urlData),
        'request_type' => 'invalid'
    ];

    $wpdb->insert(
        'wp_lead_logs',
        $logData,
        ['%s', '%s', '%s', '%s', '%s', '%s']
    );

    sendError(0, "Unauthorized Source");
}
