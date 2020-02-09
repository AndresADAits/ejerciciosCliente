<?php
header('Content-Type: application/json;  charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');
$texto="";
switch($_POST["tipoPrueba"]){
    case "1":
        $texto .="<option value=''></option>";
        $texto .="<option value='SAMSUNG'>SAMSUNG</option>";
        $texto .="<option value='APPLE'>APPLE</option>";
        $texto .="<option value='XIAOMI'>XIAOMI</option>";
        $texto .="<option value='NOKIA'>NOKIA</option>";
        break;
    case "2":
        $texto .="<option value=''></option>";
        $texto .="<option value='RICARDI'>RICARDI</option>";
        $texto .="<option value='DUILIO'>DUILIO</option>";
        $texto .="<option value='PEDRITO'>PEDRITO</option>";
        break;
    default:
        $texto .="<option value=''></option>";
        break;
}
echo json_encode($texto);
?>