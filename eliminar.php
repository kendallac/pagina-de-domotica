<?php
session_start();
$arreglo=$_SESSION['carrito'];

for ($i=0; $i < count($arreglo); $i++) { 
   if ($arreglo[$i]['Id'] !=$_POST['id']) {
    $arregloN[]=array(
        'Id'=>$arreglo[$i]['Id'],
        'Nombre'=>$arreglo[$i]['Nombre'],
        'Precio'=>$arreglo[$i]['Precio'],
        'Imagen'=>$arreglo[$i]['Imagen'],
        'Cantidad'=>$arreglo[$i]['Cantidad'],
    );
   }else if ($arreglo[$i]['Cantidad']>1) 
       
   {
    $arregloN[$i]=array(
        'Id'=>$arreglo[$i]['Id'],
        'Nombre'=>$arreglo[$i]['Nombre'],
        'Precio'=>$arreglo[$i]['Precio'],
        'Imagen'=>$arreglo[$i]['Imagen'],
        'Cantidad'=>$arreglo[$i]['Cantidad']-1, );
   }



}
if (isset($arregloN)) {
    $_SESSION['carrito']=$arregloN;
}else {
unset($_SESSION['carrito']);
}
?>