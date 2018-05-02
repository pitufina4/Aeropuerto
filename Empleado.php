<?php

class Empleado {
    var $nombre;
    var $fechanac;

    function __construct ($nombre,$fechanac) {
        $this->nombre = $nombre;
        $this->fachanac = $fechanac;
    }
    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }
    function getNombre () {
        return $this->nombre;
    }
    function setFechanac ($fechanac) {
        $this->fechanac = $fechanac;
    }
    function getFechanac () {
        return $this->fechanac;
    }
    function mostrar () {

        echo "Nombre :".$this->getNombre();
        echo "Fechanac :".$this->getFechanac();
    }
}