<?php
class Tienda {

    var $nombre;

    var $numerolocal;

    var $metroscuadrados;



    function __construct ($nombre,$numerolocal,$metroscuadrados){

        $this->nombre = $nombre;

        $this->numerolocal = $numerolocal;

        $this->metroscuadrados = $metroscuadrados;

    }



    function getNombre (){

        return $this->nombre;

    }



    function setNombre($nombre){

        $this->nombre = $nombre;

    }



    function getNumeroLocal (){

        return $this->numerolocal;

    }



    function setNumeroLocal($numerolocal){

        $this->numerolocal = $numerolocal;

    }



    function getMetrosCuadrados (){

        return $this->metroscuadrados;

    }



    function setMetrosCuadrados($metroscuadrados){

        $this->metroscuadrados = $metroscuadrados;

    }

}



?>