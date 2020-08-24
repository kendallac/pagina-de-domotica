<?php

if (isset($_POST['volver'])) {
   
    header("location: ../index.php");
} else if (isset($_POST['eliminar'])) {
   
    header("location: ../index.php");
} else if (isset($_POST['regis'])) {
   
    header("location: ./admin.php");
} else if (isset($_POST['mostrar'])) {
   
    header("location: ./mostrar.php");
} elseif (isset($_POST['buscar'])) {
   
    header("location: ./buscar-actualizar.php");
} 
    





?>