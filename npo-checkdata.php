<?php

session_start();

$home = "https://360smsapp.com";
$_REQUEST['oid'] = "00D61000000cnSO";
$retURL = $home."/thank-you";

       
                    if($_REQUEST['last_name'] == ""){
                      echo json_encode(["st"=>3,"msg"=>"Name is Required Field"]);   
                    }else if($_REQUEST['email'] == ""){
                        echo json_encode(["st"=>4,"msg"=>"Eamil is Required Field"]); 
                    }else if(!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {  
                        echo json_encode(["st"=>4,"msg"=>"The Email  must contain a valid email address."]);
                    }else if($_REQUEST['company'] == ""){
                        echo json_encode(["st"=>4,"msg"=>"Company is Required Field"]); 
                    } else{                      
                            $new_qs=  preg_replace('/\s+/', '', $_REQUEST);
                            $qs = http_build_query($new_qs);
                      
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