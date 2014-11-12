<?php
$img = imagecreatetruecolor(70, 80);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);

imagefill($img,0,0, $white);

imagefilledrectangle($img, 0, 0, 10, 30, $black);
imagefilledrectangle($img, 0, 40, 10, 70, $black);
imagefilledrectangle($img, 40, 0, 20, 10, $black);
imagefilledrectangle($img, 20, 10, 30, 30, $black);
imagefilledrectangle($img, 30, 30, 70, 20, $black);
imagefilledrectangle($img, 70, 0, 60, 50, $black);
imagefilledrectangle($img, 70, 0, 50, 10, $black);
imagefilledrectangle($img, 60, 50, 20, 40, $black);
imagefilledrectangle($img, 20, 40, 30, 70, $black);
imagefilledrectangle($img, 30, 70, 70, 60, $black);
imagefilledrectangle($img, 70, 60, 60, 80, $black);
header('Content-Type: image/jpeg');

imagepng($img);
imagedestroy($img);
?>