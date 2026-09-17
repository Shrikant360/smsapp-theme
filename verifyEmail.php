<?php 

if(isset( $_SERVER['HTTP_REFERER']) && ($_SERVER['HTTP_ORIGIN']=="https://".$_SERVER['HTTP_HOST']) ){

session_start(); 
 $p_id = $_REQUEST['id'];
 
 $_SESSION['captcha_total'][$_REQUEST['id']]['email_status'] = 0 ;
if(!empty($_POST)){ 
    $email = $_POST['email'];
     if(!empty($email)){ 
               $provider_key = "live_e9e558904694ccb9c0519538b775021e6f8d051dde3c11b6dbc9ef5296d393b3";
               $curl = curl_init();
                
                curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.kickbox.io/v2/verify?email=".$email,
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
            //  echo "<pre>";
          //   print_r($response);
         //  die;
               if(!empty($response["result"])){
                   
                    if( ($response["result"] == "undelivered") || ($response["result"] ==  "undeliverable")  ){
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
                 $_SESSION['captcha_total'][$_REQUEST['id']]['email_status'] = 1;
                    echo json_encode(array("status"=>true,"msg"=>"Verified" ));
                }else{   
                    $_SESSION['captcha_total'][$_REQUEST['id']]['email_status'] = 0;
                    echo json_encode(array("status"=>false,"msg"=>"Sorry email is not valid!"));
                }
  
    }
}
} else {
    http_response_code(401);
    echo json_encode(array("status"=>false,"msg"=>"Unauthorized Source"));
   
}
?>