<?php
if(isset($_POST['login'])){
include("conexion.php");
$nombre=$_POST['nombre'];
$correo=$_POST['email'];
$contraseña=$_POST['contraseña'];
$date=date("m.d.y");

$resultado=$conn ->query("INSERT INTO usuarios(id, nombre, pass, correo, fecha) VALUES ('0','$nombre','$contraseña','$correo','$date')
")or die($conn->error);
}
?>