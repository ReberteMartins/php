<?php

$nome = "Reberte";

function teste()
{
    global $nome;
    echo $nome;
}

function teste2()
{
    $nome = "Leticia";
    echo $nome . " agora no teste 2";
}

teste();

echo "</br>";

teste2();
?>