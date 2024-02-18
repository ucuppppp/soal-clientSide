<?php

$baseImg = imagecreatefromjpeg('bg.jpeg');
$watermark = imagecreatefrompng('logo.png');

$wWidth = imagesx($watermark);
$wHeight = imagesy($watermark);

$imgWidth = imagesx($baseImg);
$imgHeight = imagesy($baseImg);

imagecopy($baseImg, $watermark, $wWidth + 670, -70, 0, 0, $wWidth, $wHeight);

header('Content-Type: image/jpeg');
imagejpeg($baseImg);

?>
