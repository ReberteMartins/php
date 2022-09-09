<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {

    public function acelerar($velocidade){

        echo "O veiculo acelerou até ". $velocidade . " km/h";
    }

    public function frear($velocidade){

        echo "o motorista freou até ". $velocidade ." km/h";
    }

    public function trocarMarcha($marcha){

        echo "A marcha atual do carro é ". $marcha .".";
    }
}

class DelRey extends Automovel {

    public function empurrar(){

    }
}

$carro = new DelRey();

$carro->acelerar(200);
?>