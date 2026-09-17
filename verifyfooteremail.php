<?php 
if(isset( $_SERVER['HTTP_REFERER']) && ($_SERVER['HTTP_ORIGIN']=="https://".$_SERVER['HTTP_HOST']) ){

//session_start();   
//$_SESSION['email_status'] = 0;
if(!empty($_POST)){ 
    $email1 = $_POST['email'];    //echo "<pre>";
           //print_r($_POST);
            //die; 
     if(!empty($email1)){ 
               $provider_key = "live_c04ea8bc6dbefca0a681bf1ad2640a29d1252206d3a720ba69a6f91bc46a7875";
               $curl = curl_init();
                
                curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.kickbox.io/v2/verify?email=".$email1,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: Bearer ".$provider_key
                ),
                ));
                
                $response = json_decode(curl_exec($curl),true);
                // echo $status;die;
                // $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            //echo "<pre>";
           //print_r($response);
        // die;
               if(!empty($response["result"])){
                    
                    if( ($response["result"] == "undelivered") || ($response["result"] ==  "undeliverable") || ($response["result"] == "unknown")  ){
                        $email_status = "false";
                    }
                    else{
                       $email_status = "true"; 
                    } 
               }
               else{
                    $email_status = "false";
               }
               
               if( $email_status=="true"){
               //  $_SESSION['email_status'] = 1;
                    echo json_encode(array("status"=>true,"msg"=>"Verified" ));
                }else{   
                   // $_SESSION['email_status'] = 0;
                    echo json_encode(array("status"=>false,"msg"=>"Sorry email is not valid!"));
                }
  
    }
}
} else {
    http_response_code(401);
    echo json_encode(array("status"=>false,"msg"=>"Unauthorized Source"));
   
}
?>