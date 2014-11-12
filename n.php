<?php
include 'line.php';

$zurlaga = array();
$zurlaga[] = new Line(0, 0, 10, 30);
$zurlaga[] = new Line(20, 0, 70, 10);
$zurlaga[] = new Line(20, 10, 30, 30);
$zurlaga[] = new Line(30, 30, 70, 20);
$zurlaga[] = new Line(70, 20, 60, 40);

$zur_string = json_encode($zurlaga);
echo $zur_string;
/*
$zur = json_decode($zur_string);
//======================================
$img = imagecreatetruecolor(70, 70);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);

imagefill($img,0,0, $white);
foreach($zur as $line){
    imagefilledrectangle($img, $line->Start->X, $line->Start->Y, $line->End->X, $line->End->Y, $black);
}
header('Content-Type: image/jpeg');

imagepng($img);
imagedestroy($img);*/
?>