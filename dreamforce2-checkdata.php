<?php

session_start();

$home = "https://360smsapp.com";
$_REQUEST['oid'] = "00D61000000cnSO";

$retURL = $home."/thank-you";

        
                if($_REQUEST['last_name'] == "" ){
                      echo json_encode(["st"=>3,"msg"=>"Name Required Field"]);   
                    }else if($_REQUEST['email'] == ""){
                        echo json_encode(["st"=>4,"msg"=>"Eamil Required Field"]); 
                    }else if(!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {  
                        echo json_encode(["st"=>4,"msg"=>"The Email  must contain a valid email address."]);
                    }else if($_REQUEST['phone'] == ""){
                        echo json_encode(["st"=>5,"msg"=>"Phone Number Required Field"]); 
                   }else{  
                   
                    // UTM Parameters Extraction
                        if (isset($_REQUEST['c_url'])) {
                            $queryString = parse_url($_REQUEST['c_url'], PHP_URL_QUERY);
                            parse_str($queryString, $queryParams);

                            // Extract and set UTM parameters
                            $utmParameters = [
                                'utm_source' => 'UTM_Source__c',
                                'utm_medium' => 'UTM_Medium__c',
                                'utm_campaign' => 'UTM_Campaign__c',
                                'utm_id' => 'UTM_Id__c',
                                'utm_term' => 'UTM_Term__c',
                                'utm_content' => 'UTM_Content__c',
                                'utm_device' => 'UTM_Device__c',
                                'campaignid' => 'Campaign_ID__c',
                                'adgroupid' => 'Adgroup_ID__c',
                                'creative' => 'Creative_ID__c'
                            ];

                            foreach ($utmParameters as $key => $field) {
                                if (array_key_exists($key, $queryParams)) {
                                    $_REQUEST[$field] = $queryParams[$key];
                                }
                            }
                        }
                   
                           $new_qs=  preg_replace('/\s+/', '', $_REQUEST);
                            $qs = http_build_query($new_qs);
                         
                       // $qs = urlencode($qs);
                            $url = 'https://webto.salesforce.com/servlet/servlet.WebToLead?'.$qs;
                         
                        $curl = curl_init();
                            
                            curl_setopt_array($curl, array(
								CURLOPT_URL =>$url, 
								CURLOPT_RETURNTRANSFER => true,
								CURLOPT_ENCODING => '',
								CURLOPT_MAXREDIRS => 10,
								CURLOPT_TIMEOUT => 0,
								CURLOPT_FOLLOWLOCATION => true,
								CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
								CURLOPT_CUSTOMREQUEST => 'POST',
								CURLOPT_HTTPHEADER => array(),
                            ));
                            
                            $response = curl_exec($curl);
                            $status = curl_getinfo($curl, CURLINFO_RESPONSE_CODE);
                           
                            curl_close($curl);
                            http_response_code($status);
                            
                            if($status == 200){
                                 echo json_encode(["st"=>1,"msg"=>"Data Submitted Successfully", "url" => $retURL]);
                            }else{
                               echo json_encode(["st"=>0,"msg"=>"Somthing went wrong please try again later"]);  
                             }
                }
                              
                           
?>