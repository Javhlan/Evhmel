<?php
include 'line.php';

$zurlaga = array();
$zurlaga[] = new Line(50, 60, 40, 40);
$zurlaga[] = new Line(40, 40, 0, 50);
$zurlaga[] = new Line(0, 50, 10, 20);
$zurlaga[] = new Line(10, 20, 30, 30);
$zurlaga[] = new Line(30, 30, 20, 0);
$zurlaga[] = new Line(20, 0, 50, 10);
$zurlaga[] = new Line(50, 10, 40, 30);
$zurlaga[] = new Line(40, 30, 70, 20);
$zurlaga[] = new Line(70, 20, 60, 60);

$zur_string = json_encode($zurlaga);
echo $zur_string;
/*
$img = imagecreatetruecolor(70, 60);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);

imagefill($img,0,0, $white);

imagefilledrectangle($img, 50, 60, 40, 40, $black);
imagefilledrectangle($img, 40, 40, 0, 50, $black);
imagefilledrectangle($img, 0, 50, 10, 20, $black);
imagefilledrectangle($img, 10, 20, 30, 30, $black);
imagefilledrectangle($img, 30, 30, 20, 0, $black);
imagefilledrectangle($img, 20, 0, 50, 10, $black);
imagefilledrectangle($img, 50, 10, 40, 30, $black);
imagefilledrectangle($img, 40, 30, 70, 20, $black);
imagefilledrectangle($img, 70, 20, 60, 60, $black);
header('Content-Type: image/jpeg');

imagepng($img);
imagedestroy($img);
 
 */
?>