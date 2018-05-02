<?php

require_once("compania.php");


class Gamma extends Compania {

    var $anofundacion;

    function __construct ($nombre,$telefonoe,$anofundacion){
        parent::__construct($nombre,$telefono);
        $this->anofundacion = $anofundacion;

    }

    function getAnoFundacion (){
        return $this->anofundacion;
    }

    function setAnoFundacion($anofundacion){
        $this->anofundacion = $anofundacion;
    }

}

?>