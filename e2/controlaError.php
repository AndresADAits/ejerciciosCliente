<?php
require_once "validaNombre.php";

$errores = array();
$errores["nombre"] = array();


if(isset($_POST["nombre"])){
    $errores["nombre"] = validacionNombre(trim($_POST["nombre"]));
}


echo json_encode($errores, JSON_FORCE_OBJECT);