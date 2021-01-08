<?php

session_start();

$_SESSION['errMsg'] = 0;

require_once('./models/Database.php');

$controlador = $_REQUEST['gui'];
//$controlador = 'usuario';

// logica del controlador
if (!isset($_REQUEST['c'])) {
    //echo 'true';
    require_once("./controllers/Controlador" . ucwords($controlador) . ".php");
    $controlador = 'Controlador' . ucwords($controlador);
    $controlador = new $controlador;
    $controlador->Index();
} else {
    //echo 'false;';
    // Obtenemos el controlador que queremos cargar
    $controlador  = $_REQUEST['c'];
    $accion       = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    // Instanciamos el controlador
    require_once("./controllers/Controlador" . ucwords($controlador) . ".php");
    $controlador = 'Controlador' . ucwords($controlador);

    $controlador = new $controlador;

    // Llama la accion

    call_user_func(array($controlador, $accion));
}