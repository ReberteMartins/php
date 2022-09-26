<?php
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);

error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;

?>