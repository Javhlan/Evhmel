<?php
$img = imagecreatetruecolor(70, 40);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);

imagefill($img,0,0, $white);

imagefilledrectangle($img, 0, 0, 10, 40, $black);
imagefilledrectangle($img, 0, 0, 70, 10, $black);
imagefilledrectangle($img, 70, 10, 60, 30, $black);
imagefilledrectangle($img, 60, 30, 20, 20, $black);
header('Content-Type: image/jpeg');

imagepng($img);
imagedestroy($img);
?>