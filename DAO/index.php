<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require_once("config.php");

//CARREGA UMA LISTA DE USUÁRIOS
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//CARREGA UMA LISTA DE USUARIOS
//$lista = Usuario::getList();
//echo json_encode($lista);

//CARREGA UMA LISTA DE USUAIOS BUSCANDO PELO LOGIN
//$search = Usuario::search("r");
//echo json_encode($search);

//CARREGA UM USUARIO, USANDO UM LOGIN E A SENHA
//$usuario = new Usuario();
//$usuario->login("Jose", "Senha nova");
//echo $usuario;

//CRIANDO UM NOVO USUARIO
//$aluno = new Usuario("aluno","R3b3r73");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(18);

$usuario->update("professor", "1234321");

echo $usuario;
?>