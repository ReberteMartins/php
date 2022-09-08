<?php

class Pessoa {

    public $nome;

    public function falar(){

        return "O meu nome é ".$this->nome;

    }
}

$reberte = new Pessoa();
$reberte->nome = "Reberte Martins";
echo $reberte->falar();

?>