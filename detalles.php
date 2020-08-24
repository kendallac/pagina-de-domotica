<?php
include('conexion.php');
if (isset($_GET['id'])) {
    $resultado=$conn ->query("SELECT * FROM Productos where id=".$_GET['id'])or die($conn->error);
    if (mysqli_num_rows($resultado) > 0) {
        
    }else{
        header("Location: ./index.php");
    }
}else{

header("Location: ./index.php");

}
?>