<?php

require_once("compania.php");


class Alpha extends Compania {

    var $codautorizacion;

    function __construct ($nombre,$telefono,$codautorizacion){
        parent::__construct($nombre,$telefono);
        $this->codautorizacion = $codautorizacion;
    }

    function getCodAutorizacion (){
        return $this->codautorizacion;
    }

    function setCodAutorizacion($codautorizacion){
        $this->codautorizacion = $codautorizacion;
    }
}

?>

