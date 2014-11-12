<?php
$img = imagecreatetruecolor(70, 50);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);

imagefill($img,0,0, $white);

imagefilledrectangle($img, 50, 0, 40, 30, $black);
imagefilledrectangle($img, 40, 30, 20, 20, $black);
imagefilledrectangle($img, 20, 20, 30, 0, $black);
imagefilledrectangle($img, 30, 0, 70, 10, $black);
imagefilledrectangle($img, 70, 10, 60, 50, $black);
imagefilledrectangle($img, 60, 50, 0, 40, $black);
imagefilledrectangle($img, 0, 40, 10, 0, $black);
header('Content-Type: image/jpeg');

imagepng($img);
imagedestroy($img);
?>