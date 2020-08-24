<?php
 
   include('conexion.php');

  if(isset($_POST['log'])){
 
  $email=$_POST['corr'];
  $password =$_POST['cont'];
if ($email=="admin"&& $password="KcGcLm") {
  header("Location: ./admin/administrador.php");
} else {
 


$resultado=$conn ->query("SELECT * FROM `usuarios` WHERE (nombre='$email' or correo='$email') AND pass='$password'")or die($conn->error);
$dat=mysqli_num_rows($resultado);
if ($dat != NULL) {
$_SESSION['nombre']=$email;
header("Location: ./index.php");
}else{
    echo "<p class=d>contraseña o usuario incorrectos intentelo nuevamente </p>" ;
}

  }}
?>

