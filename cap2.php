<?php
   header('X-Robots-Tag: noindex, nofollow');
   header('Content-Type: image/jpeg');  
	session_start();
// 		$math = $_SESSION['math']; 

   $p_id = $_REQUEST['id'];

    $one_value = rand(1,9);
    $two_value = rand(1,9);
    if($one_value > $two_value){
           $captcha_total = $one_value - $two_value; 
           $math = "$one_value"." - "."$two_value"." =";  
    }else{
            $captcha_total = $one_value + $two_value;
            $math = "$one_value"." + "."$two_value"." =";
    }
    
    if(empty($_SESSION['captcha_total'])){
      $_SESSION['captcha_total'] = array();  
    }
    
    if(array_key_exists($p_id,$_SESSION['captcha_total'])){
      $_SESSION['captcha_total'][$_REQUEST['id']]['sum'] = $math;
      $_SESSION['captcha_total'][$_REQUEST['id']]['captcha_total'] = $captcha_total;
    }else{
        $_SESSION['captcha_total'][$p_id] = array('sum' => $math,'captcha_total' => $captcha_total); 
    }
    
    $_SESSION['math'] = $math;
  
    // $_SESSION['phone_status'] = 0; $_SESSION['email_status'] = 0;
	
   // 	echo "<pre>"; print_r($_SESSION); die;

	$height = 35; 
	$width = 95;   
	$image_p = imagecreate($width, $height); 
	$black = imagecolorallocate($image_p, 255, 255, 255); 
	$white = imagecolorallocate($image_p, 0, 0, 0); 
	$font_size = 14; 
// Dott code start	
$random_captcha_dots = 100;
$captcha_noise_color = "0x142864";
$array_noise_color = hextorgb($captcha_noise_color);

$image_noise_color = imagecolorallocate(
$image_p,
$array_noise_color['red'],
$array_noise_color['green'],
$array_noise_color['blue']
);
$dot_width = 150;
for( $count=0; $count<$random_captcha_dots; $count++ ) {
    imagefilledellipse(
    $image_p,
    mt_rand(0,$dot_width),
    mt_rand(0,$height),
    1,
    2,
    $image_noise_color
    );
}

function hextorgb ($hexstring){
  $integar = hexdec($hexstring);
  return array("red" => 0xFF & ($integar >> 0x10),
               "green" => 0xFF & ($integar >> 0x8),
               "blue" => 0xFF & $integar);
			   }
// line code start			   
			   
$random_captcha_lines = 1;

for( $count=0; $count<$random_captcha_lines; $count++ ) {
imageline(
	$image_p,
	mt_rand(0,$width),
	mt_rand(0,$height),
	mt_rand(0,$width),
	mt_rand(0,$height),
	$image_noise_color
	);
}
	imagestring($image_p, $font_size, 9, 9, $math, $white); 
	imagejpeg($image_p, null, 80); 
?>