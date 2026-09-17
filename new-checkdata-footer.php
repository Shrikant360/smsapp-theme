<?php
// 1. Check HTTP Referer and Origin
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 require_once( dirname(__FILE__) . '/../../../wp-load.php' );
 
 function sendError($statusCode, $message)
{
    echo json_encode(["st" => $statusCode, "msg" => $message]);
    exit;
}

function getHomeUrl() {
    $requestUri = $_SERVER['REQUEST_URI'];
    $subdomainPath = dirname($requestUri); // Get the subdomain path from the URI

    // Trim leading slashes from the subdomain part
    $subdomain = trim($subdomainPath, '/');
    
    // Default home URL
    $defaultHome = "https://360smsapp.com";
    
    // If a subdomain exists, modify the home URL accordingly
  // If a subdomain exists, modify the home URL accordingly
    if (!empty($subdomain)) {
        return "https://360smsapp.com";
    } else {
        return $defaultHome;
    }
}

function isPublicEmailDomain($email) {
    //die("Function isPublicEmailDomain called");

    $emailDomain = strtolower(trim(substr(strrchr($email, "@"), 1)));

    $ch = curl_init('https://360smsapp.com/restrict-domain/api_new.php'); // Replace with actual URL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, 'myapiuser:mypassword'); // Replace with actual credentials
    $apiResponse = curl_exec($ch);
    curl_close($ch);

       //die("$apiResponse");


    if ($apiResponse === false) {
        return false;
    }

    $blockedDomains = json_decode($apiResponse, true);
if (json_last_error() === JSON_ERROR_NONE && is_array($blockedDomains)) {
    $domainList = array_map(function($d) {
        return strtolower(trim($d));
    }, array_column($blockedDomains, 'domain'));

    $emailDomain = strtolower(trim(substr(strrchr($email, "@"), 1)));
    
    // Debug output
    //die("Checking for domain: $emailDomain\n\n" . print_r($domainList, true));

    return in_array($emailDomain, $domainList);
}


    return false;
}
 
if (isset($_SERVER['HTTP_REFERER']) && ($_SERVER['HTTP_ORIGIN'] == "https://" . $_SERVER['HTTP_HOST'])) {
    session_start();

    if (empty($_REQUEST['email'])) {
        sendError(4, "Required Field");
    } elseif (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
        sendError(4, "The Email must contain a valid email address.");
    } elseif (isPublicEmailDomain($_REQUEST['email'])) {
        sendError(4, "Please enter your business email address only.");
    }

    // Decrypt and fetch API credentials from DB
    global $wpdb;
    $row = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}api_token LIMIT 1");
    if (!$row) sendError(4, "No data found, please contact support.");

    function decrypt_data($encrypted) {
        return openssl_decrypt($encrypted, ENCRYPTION_METHOD, SECRET_KEY, 0, SECRET_IV);
    }

    $org_id       = decrypt_data($row->org_id);
    $bearer_token = decrypt_data($row->bearer_token);

    // Email validation API call
    $email = $_REQUEST['email'];
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://verify.360degreeapps.com/verifyEmailv1.php',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode(['email' => $email]),
        CURLOPT_HTTPHEADER => [
            'Orgid: ' . $org_id,
            'Authorization: Bearer ' . $bearer_token,
            'Content-Type: application/json'
        ],
    ));
    $response = json_decode(curl_exec($curl), true);
    curl_close($curl);

    if (!empty($response["result"]) && ($response["result"] == "undelivered" || $response["result"] == "undeliverable" || (isset($response["sendex"]) && $response["sendex"] < 0.70))) {
        sendError(4, "Sorry, the email is not valid!");
    }

    // Redirect logic
    $home = getHomeUrl();
    $returnurl = $_REQUEST['retURL'] ?? "$home/thank-you";
    $_REQUEST['oid'] = '00D61000000cnSO';
    $qs = http_build_query($_REQUEST);
    $url = 'https://webto.salesforce.com/servlet/servlet.WebToLead?' . $qs;

        // Data insertion to log file
     $email  = sanitize_email($_REQUEST['email']);
      //$phone  = preg_replace('/[^\d\+]/', '', $_REQUEST['phone']);
        $ip     = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP) ?: '';
        $referer_url = isset($_SERVER['HTTP_REFERER']) ? esc_url_raw($_SERVER['HTTP_REFERER']) : '';
        $salesforce_url = isset($url) ? esc_url_raw($url) : '';
        $user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? sanitize_text_field($_SERVER['HTTP_USER_AGENT']) : '';

        // Sanitize and prepare JSON payload
        $urlData = [
            "referer_url"   => $referer_url,
            "salesforce_url" => $salesforce_url,
            "user_agent"    => $user_agent,
        ];

        $logData = [
            'ip'           => $ip,
            'email'        => $email,
            'phone'        => '',
            'json_payload' => wp_json_encode($urlData),
            'request_type' => 'valid',
            'created_at'   => current_time('mysql'),
        ];
        // Insert securely
        $wpdb->insert(
            'wp_lead_logs',
            $logData,
            [
                '%s', // ip
                '%s', // email
                '%s', // phone
                '%s', // created_at
                '%s', // json_payload
                '%s', // request_type
            ]
        );

    // Send to Salesforce
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true
    ]);
    curl_exec($curl);
    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    if ($status == 200) {
            echo json_encode(["st" => 1, "msg" => "Data Submitted Successfully", "url" => $returnurl]);
    } else {
        sendError(0, "Something went wrong, please try again later");
    }

} else {
    sendError(0, "Unauthorized Source");
}