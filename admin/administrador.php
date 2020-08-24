<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Administración</title>
</head>

<body>
    <div class="barraS">

        <div >
            <img class="defi" src="../img/definitiva3.png" alt="">
            <h1 class="h1">Administración</h1>
        </div>

    </div>


    <form method="post">
<h2>Productos</h2>
        <input class="boton" type="submit" name="regis" value="Registrar">
        <input class="boton" type="submit" name="mostrar" value="Mostrar">
        <input class="boton" type="submit" name="buscar" value="Buscar- actualizar-eliminar">
        <input class="boton" type="submit" name="volver" value="Volver">
    </form>
    <?php
include("botones.php");
?>
</body>

</html>