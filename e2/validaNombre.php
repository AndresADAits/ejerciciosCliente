<?php
header("Pragma: no-cache");
function validacionNombre($nombre){
    $errores = array();
    if($nombre !== "") {

        if (!preg_match("/[A-ZÑ ]{5,}$/",$nombre)) {
            $errores[] = "El nombre de estar en mayúsculas y  5 carácteres";
        }
    }else{
        $errores[] = "Este campo no puede vacío";
    }
    return $errores;
}

