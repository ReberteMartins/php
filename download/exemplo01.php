<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

$link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>" alt="Logo do google">