<?php
if(isset($_POST['registrar'])){
    include("../conexion.php");
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];
    $imagen=$_POST['imagen'];
    $desrci=$_POST['descri'];
    $descri2=$_POST['descri2'];
    $date=date("m.d.y");
    echo "hola";

    $resultado=$conn ->query("INSERT INTO `Productos`(`id`, `nombre`, `precio`, `cantidad`, `imagen`, `detalles`, `detalles2`, `fecha`) VALUES ('0','$nombre','$precio','$cantidad','$imagen','$desrci','$descri2','$date')
    ")or die($conn->error);
echo "registrado exitosamente";
    }else if (isset($_POST['volver'])) {
        header("location: ./administrador.php");
    }
?>