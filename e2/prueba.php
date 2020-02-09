<?php
header("Pragma: no-cache");
function validarnombre($nombre){
    $errores = array();
    if($nombre !== "") {

        if (!preg_match("/[A-ZÑ ]{5,}$/",$nombre)) {
            $errores[] = "El nombre solo es en mayusculas y mas de 5 letras";
        }
    }else{
        $errores[] = "El nombre no puede estar vacío";
    }
    return $errores;
}

