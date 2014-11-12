<?php
$img = imagecreatetruecolor(70, 70);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);

imagefill($img,0,0, $white);

imagefilledrectangle($img, 40, 20, 10, 30, $black);
imagefilledrectangle($img, 50, 40, 40, 20, $black);
imagefilledrectangle($img, 10, 50, 50, 40, $black);
imagefilledrectangle($img, 0, 0, 10, 50, $black);
imagefilledrectangle($img, 0, 0, 70, 10, $black);
imagefilledrectangle($img, 70, 10, 60, 70, $black);
imagefilledrectangle($img, 60, 70, 0, 60, $black);
header('Content-Type: image/jpeg');

imagepng($img);
imagedestroy($img);
?>