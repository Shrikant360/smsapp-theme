<?php
/**
 * Captcha image for [contact_page_multi_shortcode] only.
 * Uses ?id= (e.g. cpm_1) so multiple forms on one page do not share session keys.
 * Do not replace cap2.php — original forms keep using cap2.php.
 */
session_start();
header('X-Robots-Tag: noindex, nofollow', true);
header('Content-Type: image/jpeg');

if (! empty($_GET['id'])) {
    $p_id = preg_replace('/[^a-zA-Z0-9_-]/', '', (string) $_GET['id']);
} else {
    $p_id = 'default';
}

$one_value = rand(1, 9);
$two_value = rand(1, 9);

if ($one_value > $two_value) {
    $captcha_total = $one_value - $two_value;
    $math          = "$one_value - $two_value =";
} else {
    $captcha_total = $one_value + $two_value;
    $math          = "$one_value + $two_value =";
}

if (empty($_SESSION['captcha_total']) || ! is_array($_SESSION['captcha_total'])) {
    $_SESSION['captcha_total'] = array();
}

$_SESSION['captcha_total'][$p_id] = array(
    'sum'           => $math,
    'captcha_total' => $captcha_total,
);

$height    = 35;
$width     = 95;
$image_p   = imagecreate($width, $height);
$white     = imagecolorallocate($image_p, 255, 255, 255);
$black     = imagecolorallocate($image_p, 0, 0, 0);
$font_size = 14;

function cpm3_hextorgb($hexstring)
{
    $integar = hexdec($hexstring);
    return array(
        'red'   => 0xFF & ($integar >> 0x10),
        'green' => 0xFF & ($integar >> 0x8),
        'blue'  => 0xFF & $integar,
    );
}

$array_noise_color = cpm3_hextorgb('0x142864');
$image_noise_color = imagecolorallocate(
    $image_p,
    $array_noise_color['red'],
    $array_noise_color['green'],
    $array_noise_color['blue']
);

for ($count = 0; $count < 100; $count++) {
    imagefilledellipse(
        $image_p,
        mt_rand(0, 150),
        mt_rand(0, $height),
        1,
        2,
        $image_noise_color
    );
}

imageline(
    $image_p,
    mt_rand(0, $width),
    mt_rand(0, $height),
    mt_rand(0, $width),
    mt_rand(0, $height),
    $image_noise_color
);

imagestring($image_p, $font_size, 9, 9, $math, $black);
imagejpeg($image_p, null, 80);
