<?php

if(isset ($_GET["controlador"])&& isset($_GET["accion"])) {

    $controlador = $_GET ["controlador"];
    $accion = $_GET ["accion"];
}
print_r($controlador);
print_r($accion);

require_once("./View/pagina/template.php");

?>