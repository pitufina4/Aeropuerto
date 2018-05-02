<?php


require_once("empleado.php");


class Controlador extends Empleado {

    var $horastrabajo;
    
    function __construct ($nombre,$fechanac,$horastrabajo){
        parent::__construct($nombre,$fechanac);
        $this->horastrabajo = $horastrabajo;
    }

    function getHorasTrabajo (){
        return $this->horastrabajo;
    }

    function setHorasTrabajo($horastrabajo){
        $this->horastrabajo = $horastrabajo;
    }
}

?>