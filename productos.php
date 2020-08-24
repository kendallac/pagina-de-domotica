<?php

include('conexion.php');
if (isset($_GET['id'])) {
    $resultado=$conn ->query("SELECT * FROM Productos where id=".$_GET['id'])or die($conn->error);
    if (mysqli_num_rows($resultado) > 0) {
        $fila=mysqli_fetch_row($resultado);
    }else{
        header("Location: index.php");
    }
}else{

header("Location: index.php");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detalle.css">
    <script src="https://kit.fontawesome.com/ef50293cd6.js" crossorigin="anonymous"></script>
    <title>ia-Store</title>
</head>

<body>
    <div class="principal">
        <div class="barraS">

            <div class="h1">
                <img class="defi" src="img/definitiva3.png" alt="">
            </div>
            <div class="menu">

                <ul>
                    <li><a class="icon" href="index.php"><i class="fas fa-home"></i> Inicio</a></li>
                    <li><a class="icon" href="productos.php"><i class="fas fa-shopping-basket"></i> Productos</a></li>
                    <li><a class="icon" href="acerca.php"><i class="fas fa-info-circle"></i> Acerca</a></li>
                    <li><a class="icon" href="login.php"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a></li>
                    <li><a class="icon" href="carrito.php"><i class="fas fa-shopping-cart"></i>Carrito</a></li>
                </ul>
                <?php
include('usuario.php')

?>
            </div>

        </div>
        <div class="productos">

            <div class="articulos">



                <div class="cont">
                    <section><img src=<?php echo $fila[4] ?> alt=<?php echo $fila[1] ?>>






                    <a href="carrito.php?id=<?php echo $fila[0]; ?>">  <input class="bottom" type="button" value="Añadir Al Carrito"></a>
                    </section>
                </div>
                <div class="detalles">
                    <h2><?php echo $fila[1] ?></h2>
                    <br><br>
                    Detalles: <br><br>
                    <?php echo $fila[5] ?>
                    <br><br>
                    <?php echo $fila[6] ?> <br><br>
                    <p> Precio: <?php echo $fila[2] ?>$</p>
                </div>
            </div>
        </div>
<div class="productos">
        <div class="articulos">
                <?php 
                    include('conexion.php');
                    $resultado=$conn ->query("SELECT * FROM Productos order BY RAND() LIMIT 3")or die($conn->error);
                    while ($fila= mysqli_fetch_array($resultado)) {
                     ?>



                <div class="cont">
                    <section><img src=<?php echo $fila['imagen'] ?> alt=<?php echo $fila['nombre'] ?>>
                        <?php echo $fila['nombre'] ?>
                        <br>
                        Precio: <?php echo $fila['precio'] ?>$
                        <br>
                        <a href="productos.php?id=<?php echo $fila['id']; ?>"> <input class="bottom" type="button"
                                value="Detalles"></a>
                    </section>
                </div>
                <?php } ?>
                </div>

        <footer>
            <div class="iconos">
                <a href="https://www.instagram.com/?hl=es-la"><img src="img/insta.png" alt="instagram"></a>
                <a href=""><img src="img/whatsapp.png" alt="whatsapp"></a>
                <a href="https://www.youtube.com/"><img src="img/youtube.png" alt="youtube"></a>
                <a href="https://www.google.com/gmail/"> <img src="img/gmail.png" alt="gmail"></a>
            </div>
        </footer>
    </div>
</body>

</html>

<!--  
<img src="https://www.economiadigital.es/uploads/s1/10/20/32/88/un-dispositivo-alexa-pixabay.jpeg" alt="Alexa">
<img src="https://bombillasled.online/wp-content/uploads/2019/03/leds-inteligentes.jpg" alt="Bombillas Inteligentes">
<img src="https://images-na.ssl-images-amazon.com/images/I/71Ma8jUUzdL._AC_SX522_.jpg" alt="Tiras Led Inteligente">
<img src="https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2019/10/xiaomi-mijia-360.jpg" alt="Cámaras de Seguridad Xiaomi">
<img src="https://herramientas10.top/imagenes/las-8-mejores-cerraduras-inteligentes.jpg" alt="Cerradura Inteligente">
<img src="https://i.ebayimg.com/images/g/zycAAOSwT5RdrrrQ/s-l300.jpg" alt="Enchufe inteligente">
<img src="https://images-na.ssl-images-amazon.com/images/I/615GeRtvf6L._AC_SL1000_.jpg" alt="Aspiradora Inteligente">
<img src="https://images-na.ssl-images-amazon.com/images/I/71nMzhO05jL._AC_SL1500_.jpg" alt="Interruptor Inteligente">
<img src="https://images-na.ssl-images-amazon.com/images/I/71wRosCkkBL._SL1500_.jpg" alt="Timbre con Video">


-->