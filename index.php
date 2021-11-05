<?php

if (isset ($_GET['controlador'])&& (isset($_GET['action'])) ){

    $controlador = $_GET["controlador"];

    $accion = $_GET["accion"];

    print_r($_GET);
}


require_once("./View/pagina/template.php");

?>