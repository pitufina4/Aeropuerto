<?php

require_once("Aeronave.php");



class Compania {
    var $nombre;
    var $telefono;
    var $aeronaves;

    function __construct ($nombre,$telefono,$aeronaves) {
        $this->nombre = $nombre;
        $this->telefono= $telefono;
        $this->aeronaves= $aeronaves;
    }
    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }
    function getNombre () {
        return $this->nombre;
    }
    function setTelefono ($telefono) {
        $this->telefono = $telefono;
    }
    function getTelefono () {
        return $this->telefono;
    }
    function setAeronaves ($aeronaves) {
        $this->aeronaves = $aeronaves;
    }
    function getAeronaves() {
        return $this->aeronaves;
    }
    function mostrar () {

        echo "Nombre :".$this->getNombre();
        echo "Telefono :".$this->getTelefono();
        echo "Aeronaves:".$this->getAeronaves();
    }
}