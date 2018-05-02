<?php



require_once("aeropuerto.php");



class AeropuertoInternacional extends Aeropuerto {

    var $terminales;
    var $pistas;

    function __construct ($dinternacional,$latitud,$longitud,$terminales,$pistas){
        parent::__construct($dinternacional,$latitud,$longitud);
        $this->terminales = $terminales;
        $this->pistas = $pistas;
    }

    function getTerminales (){
        return $this->terminales;
    }

    function setTerminales($terminales){
        $this->terminales = $terminales;

    }

    function getPistas (){
        return $this->pistas;
    }

    function setPistas($pistas){
        $this->pistas = $pistas;

    }
}

?>