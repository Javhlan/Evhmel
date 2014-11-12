<?php
$img = imagecreatetruecolor(70, 30);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);

imagefill($img,0,0, $white);

imagefilledrectangle($img, 0, 0, 10, 30, $black);
imagefilledrectangle($img, 10, 30, 30, 20, $black);
imagefilledrectangle($img, 30, 20, 20, 0, $black);
imagefilledrectangle($img, 20, 0, 70, 10, $black);
imagefilledrectangle($img, 70, 10, 60, 30, $black);
header('Content-Type: image/jpeg');

imagepng($img);
imagedestroy($img);
?>