<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

$root = new Usuario();

$root->loadById(2);

echo $root;
?>