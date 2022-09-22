<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

$file = fopen("log.txt","a+");

fwrite($file, date("d-m-Y H:i:s")."\r\n");

fclose($file);

echo "Arquivo criado com sucesso!";

?>