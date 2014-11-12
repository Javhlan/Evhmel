<?php
$img = imagecreatetruecolor(70, 40);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);

imagefill($img,0,0, $white);

imagefilledrectangle($img, 0, 0, 35, 10, $black);
imagefilledrectangle($img, 35, 10, 25, 30, $black);
imagefilledrectangle($img, 25, 30, 70, 20, $black);
imagefilledrectangle($img, 70, 0, 60, 40, $black);

header('Content-Type: image/jpeg');

imagepng($img);
imagedestroy($img);
?>