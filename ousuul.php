<?php
$img = imagecreatetruecolor(70, 50);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);

imagefill($img,0,0, $white);

imagefilledrectangle($img, 50, 10, 40, 20, $black);
imagefilledrectangle($img, 10, 30, 50, 20, $black);
imagefilledrectangle($img, 0, 0, 10, 30, $black);
imagefilledrectangle($img, 0, 0, 70, 10, $black);
imagefilledrectangle($img, 70, 0, 60, 50, $black);
imagefilledrectangle($img, 60, 50, 0, 40, $black);

header('Content-Type: image/jpeg');

imagepng($img);
imagedestroy($img);
?>