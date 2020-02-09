<?php
require_once "prueba.php";

$errores = array();
$errores["nombre"] = array();


if(isset($_POST["nombre"])){
    $errores["nombre"] = validarnombre(trim($_POST["nombre"]));
}


echo json_encode($errores, JSON_FORCE_OBJECT);