<?php
$img = imagecreatetruecolor(70, 50);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);

imagefill($img,0,0, $white);

imagefilledrectangle($img, 70, 0, 60, 50, $black);
imagefilledrectangle($img, 60, 40, 0, 30, $black);
imagefilledrectangle($img, 0, 30, 10, 10, $black);
imagefilledrectangle($img, 10, 10, 60, 20, $black);

header('Content-Type: image/jpeg');

imagepng($img);
imagedestroy($img);
?>