<?php        
header('Content-Type: application/json');
header('Cache-Control: no-cache, must-revalidate'); 
$id=$_POST["id"];
$nombre=$_POST["nombre"];

$conn = mysqli_connect( 'localhost', 'root', '', 'usuariostiendademoviles');
$sql =  "UPDATE `usuario` SET `nombre`='$nombre' WHERE `id`=$id";
$result=mysqli_query($conn,$sql);
?>