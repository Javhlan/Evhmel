<?php
$img = imagecreatetruecolor(70, 90);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);

imagefill($img,0,0, $white);

imagefilledrectangle($img, 0, 0, 10, 90, $black);
imagefilledrectangle($img, 10, 90, 70, 80, $black);
imagefilledrectangle($img, 70, 80, 60, 60, $black);
imagefilledrectangle($img, 60, 60, 20, 70, $black);
imagefilledrectangle($img, 20, 70, 30, 40, $black);
imagefilledrectangle($img, 30, 40, 70, 50, $black);
imagefilledrectangle($img, 70, 50, 60, 0, $black);
imagefilledrectangle($img, 60, 0, 20, 10, $black);
imagefilledrectangle($img, 20, 10, 30, 30, $black);
imagefilledrectangle($img, 30, 30, 50, 20, $black);
imagefilledrectangle($img, 50, 20, 40, 0, $black);
header('Content-Type: image/jpeg');

imagepng($img);
imagedestroy($img);
?>