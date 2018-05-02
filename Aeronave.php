<?php

class Aeronaves {

    var $marca;
    var $modelo;
    var $plazas;


    function __construct ($marca,$modelo,$plazas){

        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->plazas = $plazas;

    }
}

?>