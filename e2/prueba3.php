<?php        
header('Content-Type: application/json');
header('Cache-Control: no-cache, must-revalidate'); 
$id=$_POST["id"];
$nombre=$_POST["nombre"];

$conn = mysqli_connect( 'localhost', 'root', '', 'cachimbas');
$sql =  "UPDATE `usuarios` SET `nombre`='$nombre' WHERE `id`=$id";
$result=mysqli_query($conn,$sql);
?>