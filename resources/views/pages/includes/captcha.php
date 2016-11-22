<?php
session_start();
$ranStr = md5(microtime());
$ranStr = substr($ranStr, 0, 5);
$_SESSION['cap_code'] = $ranStr;
$newImage = imagecreatefromjpeg("../images/cap_bg.jpg");
$txtColor = imagecolorallocate($newImage, 0, 0, 0);
imagestring($newImage,5, 30, 10, $ranStr, $txtColor);
header("Content-type: image/jpeg");
imagejpeg($newImage);
?>


