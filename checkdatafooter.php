<?php

session_start();
//echo "<pre>"; print_r($_SESSION);

//die;





if(!empty($_REQUEST)){
 
  $_REQUEST['last_name'] = 'Get In Touch';
   $_REQUEST['company'] = '360smsapp';
    $_REQUEST['lead_source'] = 'Get In Touch'; //echo "<pre>"; print_r($_REQUEST); die;
   if($_REQUEST['email']){
     
   
   
            if($_REQUEST['email'] == "" ){
              echo json_encode(["st"=>11,"msg"=>"Required Field"]);   
            }else if(!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {  
                echo json_encode(["st"=>11,"msg"=>"The Email  must contain a valid email address."]);
            }
            // else if(!empty($_REQUEST['description']) && !preg_match("/^[a-zA-Z0-9 ]+$/", $_REQUEST['description'])) {  
            //      echo json_encode(["st"=>6,"msg"=>"Only Alphabet and Numbers are allowed"]); 
            // }
            else{
                
               
                 
                    $qs = http_build_query($_REQUEST); //print_r($qs);die;
                         if($_REQUEST['last_name'] && $_REQUEST['company'] && $_REQUEST['lead_source'] && $_REQUEST['email']){$url = 'https://webto.salesforce.com/servlet/servlet.WebToLead?'.$qs;} 
                    
            
                    $curl = curl_init();
                    
                    curl_setopt_array($curl, array(
                    CURLOPT_URL => $url,
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
     echo json_encode(["st"=>2,"msg"=>"Invalid email"]);
 }   
}

?>