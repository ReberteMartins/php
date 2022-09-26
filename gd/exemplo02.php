<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$grey = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Reberte Martins", $titleColor);
imagestring($image, 3, 440, 370, "Concluido em: ".date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image, "Certificado teste-".date("Y-m-d")."jpg", 75);

imagedestroy($image);
?>