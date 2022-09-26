<?php

//header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

list($old_width, $old_height) = getImagesize($file);

$new_Image = imagecreatetruecolor($new_width, $new_height);

$old_image = imagecreatefromjpeg($file);

?>