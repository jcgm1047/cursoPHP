<?php


echo $controlador;
echo $accion;

include_once("./Controller/controlador_".$controlador.".php");
$objetocontrolador = 'controlador'.ucfirst($controlador);
$controlador = new $objetocontrolador();
$controlador ->inicio();





?>