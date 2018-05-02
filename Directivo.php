<?php

require_once("empleado.php");

class AltaDireccion extends Empleado {

    var $numeroacciones;

    function __construct ($nombre,$fechanac,$numeroacciones){
        parent::__construct($nombre,$fechanac);
        $this->numeroacciones = $numeroacciones;
    }

    function getNumeroAcciones (){
        return $this->numeroacciones;
    }

    function setNumeroAcciones($numeroacciones){
        $this->numeroacciones = $numeroacciones;
    }

}

