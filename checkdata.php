<?php

session_start();

// utm logic start

$queryString = parse_url($_REQUEST['c_url'], PHP_URL_QUERY);
parse_str($queryString, $queryParams);


// UTM Source
if (array_key_exists('utm_source', $queryParams)) {
    $value = $queryParams['utm_source'];
    $_REQUEST['UTM_Source__c'] = $value;
}
// UTM Medium
if (array_key_exists('utm_medium', $queryParams)) {
    $value = $queryParams['utm_medium'];
    $_REQUEST['UTM_Medium__c'] = $value;
}
// UTM Campaign Name
if (array_key_exists('utm_campaign', $queryParams)) {
    $value = $queryParams['utm_campaign'];
    $_REQUEST['UTM_Campaign__c'] = $value;
}
// UTM Id
if (array_key_exists('utm_id', $queryParams)) {
    $value = $queryParams['utm_id'];
    $_REQUEST['UTM_Id__c'] = $value;
}

// Term
if (array_key_exists('utm_term', $queryParams)) {
    $value = $queryParams['utm_term'];
    $_REQUEST['Keyword__c'] = $value;
}


//2nd para

if (array_key_exists('campaignid', $queryParams)) {
    $value = $queryParams['campaignid'];
    $_REQUEST['Campaign_ID__c'] = $value;
}

// Adgroup ID
if (array_key_exists('adgroupid', $queryParams)) {
    $value = $queryParams['adgroupid'];
    $_REQUEST['Adgroup_ID__c'] = $value;
}

// Creative ID
if (array_key_exists('creative', $queryParams)) {
    $value = $queryParams['creative'];
    $_REQUEST['Creative_ID__c'] = $value;
}



$_REQUEST['oid'] = "00D61000000cnSO";

if($_REQUEST['pageid'] == 43400){
    //$retURL = $_REQUEST['pdf_link']; 
    $_REQUEST['retURL']= $_REQUEST['pdf_link']; 
 }
 //else{
//     $retURL = $home."/thank-you";
// }
 


         if($_REQUEST['vercode'] == $_SESSION['captcha_total'][$_REQUEST['pageid']]['captcha_total']){
            if($_SESSION['captcha_total'][$_REQUEST['pageid']]['email_status'] == 1 || $_SESSION['captcha_total'][$_REQUEST['pageid']]['phone_status'] == 1){
           
                    if($_REQUEST['last_name'] == "" ){
                      echo json_encode(["st"=>3,"msg"=>"Required Field"]);   
                    }else if($_REQUEST['email'] == ""){
                        echo json_encode(["st"=>4,"msg"=>"Required Field"]); 
                    }else if($_REQUEST['company'] == ""){
                        echo json_encode(["st"=>5,"msg"=>"Required Field"]); 
                    }else if(!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {  
                        echo json_encode(["st"=>4,"msg"=>"The Email  must contain a valid email address."]);
                    }else if(strtolower(substr($_REQUEST['email'], -9)) == "gmail.com"){
                        echo json_encode(["st"=>4,"msg"=>"Please enter your business email address. This form does not accept addresses from gmail.com"]); 
                    }else if(strtolower(substr($_REQUEST['email'], -9)) == "yahoo.com"){
                        echo json_encode(["st"=>4,"msg"=>"Please enter your business email address. This form does not accept addresses from yahoo.com"]); 
                    }else if(strtolower(substr($_REQUEST['email'], -10)) == "rediff.com"){
                        echo json_encode(["st"=>4,"msg"=>"Please enter your business email address. This form does not accept addresses from rediff.com"]); 
                    }else if(strtolower(substr($_REQUEST['email'], -11)) == "outlook.com"){
                        echo json_encode(["st"=>4,"msg"=>"Please enter your business email address. This form does not accept addresses from outlook.com"]); 
                    }else if(strtolower(substr($_REQUEST['email'], -11)) == "hotmail.com"){
                        echo json_encode(["st"=>4,"msg"=>"Please enter your business email address. This form does not accept addresses from hotmail.com"]); 
                    }else{                      
                            
                            unset($_REQUEST['vercode']);
                            $qs = http_build_query($_REQUEST);
                                  
                            $url = 'https://webto.salesforce.com/servlet/servlet.WebToLead?'.$qs;
                            //echo $url;die;
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
                             $_SESSION['captcha_total'][$_REQUEST['pageid']]['phone_status'] = 0 ;
                             $_SESSION['captcha_total'][$_REQUEST['pageid']]['email_status'] = 0 ;
                              echo json_encode(["st"=>1,"msg"=>"Data Submitted Successfully", "url" => $_REQUEST['retURL']]);
                            }else{
                              echo json_encode(["st"=>0,"msg"=>"Somthing went wrong please try again later"]);  
                            }
                        }
               }else{
                  echo json_encode(["st"=>8,"msg"=>"Invalid Email and Phone Number"]); 
               }    
            
          }else{
             echo json_encode(["st"=>2,"msg"=>"Invalid Captcha"]);
         }

?>