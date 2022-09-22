<?php

$filename = "usuarios.csv";

if (file_exists($filename)) {

    $file = fopen($filename, "r");

    $headers = explode(",",fgets($file));

    while ($row = fgets($file)) {
        # code...
    }
}

?>