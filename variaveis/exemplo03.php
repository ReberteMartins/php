<?php
$nome = "Reberte";
$site = "https://github.com/ReberteMartins";

$ano = 2000;
$salario = 6000.99;
$empregado = false;

$linguagem = array( "html", "css", "javascript","php");

echo $linguagem[2];

echo "</br>";

$nascimento = new DateTime();

//var_dump($nascimento)

$arquivo = fopen("exemplo03.php", "r");
//var_dump($arquivo);

$nulo = null;
$zero = "";
?>