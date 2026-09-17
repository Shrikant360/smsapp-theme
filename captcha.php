<?php 
	session_start();
//   $one_value = rand(1,20);
//     $two_value = rand(1,20);
    
//     if($one_value > $two_value){
//         if($two_value > 11){
          
//           $captcha_total = $one_value * $two_value; 
//           $math = "$one_value"." * "."$two_value"." = "; 
            
//         }else{
//           $captcha_total = $one_value - $two_value; 
//           $math = "$one_value"." - "."$two_value"." = ";  
//         }
        
//     }else{
        
//         if($one_value < 6){
//             $captcha_total = $one_value * $two_value; 
//             $math = "$one_value"." * "."$two_value"." = ";
//         }else{
//             $captcha_total = $one_value + $two_value;
//             $math = "$one_value"." + "."$two_value"." = ";
//         }
         
//     }



//     $_SESSION['captcha_total'] = $captcha_total;
//     $_SESSION['math'] = $math;
		$math =  $_SESSION['math']; 

	$height = 25; 
	$width = 100;   
	$image_p = imagecreate($width, $height); 
	$black = imagecolorallocate($image_p, 0, 0, 0); 
	$white = imagecolorallocate($image_p, 255, 255, 255); 
	$font_size = 14; 
	imagestring($image_p, $font_size, 5, 5, $math, $white); 
	imagejpeg($image_p, null, 80); 

	
	
?>