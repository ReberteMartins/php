<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Reberte Martins");
$cad->setEmail("rebertemartins@gmail.com");
$cad->setSenha("Reberte1234");

$cad->registrarVenda();
?>