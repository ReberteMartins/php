<?php
$anoNascimento = 1000;

$nome1 = "Reberte";
$nome2 = "Martins";
$nomeCompleto = $nome1 . " " . $nome2;

echo $nomeCompleto;

echo "</br>";

if (isset($nome1)){
    Echo $nome1;
}

unset($nome1, $nomeCompleto);
?>