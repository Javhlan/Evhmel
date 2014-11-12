<?php
$img = imagecreatetruecolor(70, 70);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);

imagefill($img,0,0, $white);

imagefilledrectangle($img, 30, 70, 20, 40, $black);
imagefilledrectangle($img, 20, 40, 0, 50, $black);
imagefilledrectangle($img, 0, 50, 10, 20, $black);
imagefilledrectangle($img, 10, 20, 30, 30, $black);
imagefilledrectangle($img, 30, 30, 20, 0, $black);
imagefilledrectangle($img, 20, 0, 50, 10, $black);
imagefilledrectangle($img, 50, 10, 40, 60, $black);
imagefilledrectangle($img, 40, 60, 70, 50, $black);
imagefilledrectangle($img, 70, 50, 60, 20, $black);
header('Content-Type: image/jpeg');

imagepng($img);
imagedestroy($img);
?>