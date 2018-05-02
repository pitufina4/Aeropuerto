<?php

require_once("Empleado.php");

class Operario extends Empleado {
    var $terminal;

    function __construct ($nombre,$fechanac,$terminal) {
        parent::__construct ($nombre,$fechanac);
        $this->terminal = $terminal;
    }

    function getTerminal (){
        return $this->terminal;
    }
    function setTerminal($terminal){
        $this->terminal = $terminal;
    }
}
?>

