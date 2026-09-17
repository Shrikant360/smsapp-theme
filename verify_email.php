<?php 
$path = preg_replace('/wp-content.*$/','',__DIR__);
$path = preg_replace('/wp-content(?!.*wp-content).*/','',__DIR__);
include($path.'wp-load.php');
global $wpdb;
    
if(isset($_POST['email'])){
  $curl = curl_init();
curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.kickbox.io/v2/verify?email=".$_POST['email']."&apikey=live_e1acb16113e31634084db5d1b8fcfb8ea8aed469338e5059869e9e16acceee8f",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/json"
        )
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } 
    
    else {
        $detail = json_decode($response);
        //echo '<pre>';print_r($detail);
        if($detail->result === 'risky' || $detail->result === 'deliverable' || $detail->result === 'unknown' || $detail->result === 'valid'){
            echo json_encode(array('st' => 200, 'data' =>'Valid Email'));
        } else {
            echo json_encode(array('st' => 400, 'data' =>'Invalid Email'));
        }
    } 
}
?>