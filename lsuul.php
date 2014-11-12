<?php
$img = imagecreatetruecolor(70, 40);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);

imagefill($img,0,0, $white);

imagefilledrectangle($img, 50, 0, 40, 20, $black);
imagefilledrectangle($img, 40, 20, 0, 10, $black);
imagefilledrectangle($img, 0, 10, 10, 40, $black);
imagefilledrectangle($img, 10, 40, 70, 30, $black);
imagefilledrectangle($img, 70, 30, 60, 0, $black);
header('Content-Type: image/jpeg');

imagepng($img);
imagedestroy($img);
?>