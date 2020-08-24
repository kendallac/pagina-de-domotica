
<?php
session_start();
include('conexion.php');

if (isset($_SESSION['carrito'])) {
   
    if(isset($_GET['id'])){
   
        $arreglo=$_SESSION['carrito'];
        $encontro=false;
        $num=0;
        for ($i=0; $i < count($arreglo); $i++) { 
if ($arreglo[$i]['Id'] == $_GET['id']) {
   
    $encontro=true;
    $num=$i;
}
        }
        if ($encontro==true) {
           
$arreglo[$num]['Cantidad']   = $arreglo[$num]['Cantidad']+1;
$_SESSION['carrito']=$arreglo;
header("Location: ./carrito.php");

     }else {
      
        $nombre='';
        $precio='';
        $imagen='';
        $resultado=$conn ->query("SELECT * FROM Productos where id=".$_GET['id'])or die($conn->error);
        $fila=mysqli_fetch_row($resultado);
        $nombre=$fila[1];
        $precio=$fila[2];
        $imagen=$fila[4];
        $arregloN=array(
            'Id'=>$_GET['id'],
            'Nombre'=>$nombre,
            'Precio'=>$precio,
            'Imagen'=>$imagen,
            'Cantidad'=>1,
          
        );
        array_push($arreglo,$arregloN);
        $_SESSION['carrito']=$arreglo;
        header("Location: ./carrito.php");

     }

    }
}else {
  
    if (isset($_GET['id'])) {
     
        $nombre='';
        $precio='';
        $imagen='';
        $resultado=$conn ->query("SELECT * FROM Productos where id=".$_GET['id'])or die($conn->error);
        $fila=mysqli_fetch_row($resultado);
        $nombre=$fila[1];
        $precio=$fila[2];
        $imagen=$fila[4];
        $arreglo[]=array(
            'Id'=>$_GET['id'],
            'Nombre'=>$nombre,
            'Precio'=>$precio,
            'Imagen'=>$imagen,
            'Cantidad'=>1,
            
        );
$_SESSION['carrito']=$arreglo;
header("Location: ./carrito.php");

    }
}

?>