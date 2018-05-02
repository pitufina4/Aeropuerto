<?php


require_once("altadireccion.php");
require_once("controlador.php");
require_once("operario.php");
require_once("aeronave.php");
require_once("aeropuertointernacional.php");
require_once("compania.php");
require_once("alpha.php");
require_once("gamma.php");


class Agencia {

    var $nombre;
    var $empleados;
    var $aeropuertos;
    var $companias;

    function __construct ($nombre){
        $this->nombre = $nombre;
        $this->empleados = array();
        $this->aeropuertos = array();

        $this->companiasaereas = array();

    }

    function getNombre (){
        return $this->nombre;
    }

    function setNombre ($nombre){
        $this->nombre = $nombre;
    }

    function altaEmpleado ($empleado){

        if (count($this->empleados) == 0){
            $this->empleados[] = $empleado;
        }
        else {
            $aux = false;
            for ($i = 0; (($i < count($this->empleados)) && ($aux == false)); $i++){
                        if ($this->empleados[$i] == null){
                            $this->empleados[$i] = $empleado;
                            $aux = true;
                        }
            }

            if ($aux == false){

                for ($i = count($this->empleados); $i > 0; $i--){

                    $this->empleados[$i] = $this->empleados[$i-1];

                }

                $this->empleados[0] = $empleado;

            }

        }     

    }



    function bajaEmpleado ($nombreempleado){

        $pos = false;

        for ($i = 0; ($i < count($this->empleados)) && ($pos == false); $i++){

            if ($nombreempleado == $this->empleados[$i]->getNombre()){

                $this->empleados[$i] = null;

                $pos = true;

            }

        }

    }



    function altaAeropuerto ($aeropuerto){



        if (count($this->aeropuertos) == 0){

            $this->aeropuertos[] = $aeropuerto;

        }

        else {

            $aux = false;

            for ($i = 0; (($i < count($this->aeropuertos)) && ($aux == false)); $i++){

                        if ($this->aeropuertos[$i] == null){

                            $this->aeropuertos[$i] = $aeropuerto;

                            $aux = true;

                        }

            }

            if ($aux == false){

                for ($i = count($this->aeropuertos); $i > 0; $i--){

                    $this->aeropuertos[$i] = $this->aeropuertos[$i-1];

                }

                $this->aeropuertos[0] = $aeropuerto;

            }

        }     

    }



    function bajaAeropuerto ($dinternacional){

        $pos = false;

        for ($i = 0; ($i < count($this->aeropuertos)) && ($pos == false); $i++){

            if ($dinternacional == $this->aeropuertos[$i]->getDInternacional()){

                $this->aeropuertos[$i] = null;

                $pos = true;

            }

        }

    }



}



?>