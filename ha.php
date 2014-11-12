<?php
$img = imagecreatetruecolor(70, 60);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);

imagefill($img,0,0, $white);

imagefilledrectangle($img, 0, 0, 70, 10, $black);
imagefilledrectangle($img, 70, 10, 60, 30, $black);
imagefilledrectangle($img, 60, 30, 0, 20, $black);
imagefilledrectangle($img, 0, 20, 10, 50, $black);
imagefilledrectangle($img, 10, 50, 70, 40, $black);
imagefilledrectangle($img, 70, 40, 60, 60, $black);
header('Content-Type: image/jpeg');

imagepng($img);
imagedestroy($img);
?>