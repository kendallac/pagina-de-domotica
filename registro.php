<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
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
        <div class="registro">
            <form method="post">
                <h2>registro</h2>
                <div>
                    <img src="img/correo.png">
                    <input type="email" name="email" id="email" placeholder="Correo" required>
                </div>
                <div>
                    <input class="input" type="text" name="nombre" id="nombre" placeholder="Usuario" required >
                    <img src="img/anadir.png">
                </div>
                <div>
                    <input class="input" type="password" name="contraseña" id="contraseña" placeholder="Contraseña" required>
                    <img src="img/contrasena.png">
                </div>
                <div>
                    <input class="boton" type="submit" name="login" value="Registrar">
                </div>
                <p class="p"> 
                 Ya tienes una cuenta? <a href="login.php"> Inicia Sesión  </a>
                </p>

            </form>
            <?php include('bdlogin.php') ?>



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