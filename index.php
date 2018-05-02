<?php

require_once("agencia.php");



$agen1 = new Agencia ("Aena");



//Altas y bajas de empleados.

$e1 = new ControladorAereo ("Alvaro","04-02-1996","20","2000");

$agen1->altaEmpleado($e1);



$e2 = new AltaDireccion ("Paco","04-05-1997","20","2000");

$agen1->altaEmpleado($e2);



$e3 = new ControladorAereo ("Juan","04-02-1996","20","2000");

$agen1->altaEmpleado($e3);



$e4 = new ControladorAereo ("Felipe","04-02-1996","20","2000");

$agen1->altaEmpleado($e4);



$agen1->bajaEmpleado("Juan");



$e5 = new ControladorAereo ("David","04-02-1996","20","2000");

$agen1->altaEmpleado($e5);



//Altas y bajas de aeropuertos.



$a1 = new AeropuertoInternacional ("MAD","12","40","10","20");

$agen1->altaAeropuerto($a1);



$a2 = new AeropuertoInternacional ("IBZ","12","20","10","20");

$agen1->altaAeropuerto($a2);



$agen1->bajaAeropuerto("MAD");



echo "<pre>";

print_r ($agen1);

echo "</pre>";



?>