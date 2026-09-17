<?php

session_start();
//echo "<pre>"; print_r($_SESSION);

//die;


// echo "<pre>"; print_r($_REQUEST); die;


if(!empty($_REQUEST)){
 
 if($_REQUEST['vercode'] == $_SESSION['captcha_total']){
     
    if($_SESSION['email_status'] == 1 || $_SESSION['phone_status'] == 1){
   
            if($_REQUEST['last_name'] == "" ){
              echo json_encode(["st"=>3,"msg"=>"Required Field"]);   
            }else if($_REQUEST['email'] == ""){
                echo json_encode(["st"=>4,"msg"=>"Required Field"]); 
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
        }            
            // else if(!empty($_REQUEST['description']) && !preg_match("/^[a-zA-Z0-9 ]+$/", $_REQUEST['description'])) {  
            //      echo json_encode(["st"=>6,"msg"=>"Only Alphabet and Numbers are allowed"]); 
            // }
            else{
                
               
                    unset($_REQUEST['vercode']);
                    $qs = http_build_query($_REQUEST);
                          
                    $url = 'https://webto.salesforce.com/servlet/servlet.WebToLead?'.$qs;
            
                    $curl = curl_init();
                    
                    curl_setopt_array($curl, array(
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_HTTPHEADER => '',
                    ));
                    
                    $response = curl_exec($curl);
                    $status = curl_getinfo($curl, CURLINFO_RESPONSE_CODE);
                    curl_close($curl);
                    http_response_code($status);
                    
                    if($status == 200){
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
   
}

?>