<?php
//INTERFACE

interface Veiculo {

    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo {

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

$carro = new Civic();

$carro->trocarMarcha(1);
?>