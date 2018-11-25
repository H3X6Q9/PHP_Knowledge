<?php
header('Content-Type: image/png');

$img = imagecreatetruecolor(150, 40);
$bgcolor = imagecolorallocate($img, 255,255,255);
imagefill($img, 0,0,$bgcolor);

$textcolor = imagecolorallocate($img, 0,0,0);
imagettftext($img, '20', '0', '20','30', $textcolor, 'FZPHTJW.TTF', '232423');

imagepng($img);