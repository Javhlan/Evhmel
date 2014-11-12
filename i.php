<?php
$img = imagecreatetruecolor(70, 20);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);

imagefill($img,0,0, $white);

imagefilledrectangle($img, 0, 0, 10, 20, $black);
imagefilledrectangle($img, 0, 0, 70, 10, $black);
imagefilledrectangle($img, 70, 10, 60, 20, $black);

header('Content-Type: image/jpeg');

imagepng($img);
imagedestroy($img);
?>