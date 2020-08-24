<?php
if(isset($_POST['actualizar'])){
    include("../conexion.php");
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];
    $imagen=$_POST['imagen'];
    $desrci=$_POST['descri'];
    $descri2=$_POST['descri2'];
    $date=date("m.d.y");
    $resultado=$conn ->query("UPDATE Productos SET `id`='$id',`nombre`='$nombre',`precio`='$precio',`cantidad`='$cantidad',`imagen`='$imagen',`detalles`='$desrci',`detalles2`='$descri2',`fecha`='$date'  WHERE id = '$id'")or die($conn->error);
    }else if (isset($_POST['volver'])) {
        header("location: ./administrador.php");
    }
    if(isset($_POST['eliminar'])){
        include("../conexion.php");
        $id=$_POST['id'];
        
        $resultado=$conn ->query("DELETE FROM Productos WHERE id='$id'")or die($conn->error);
        }else if (isset($_POST['volver'])) {
            header("location: ./administrador.php");
        }
?>