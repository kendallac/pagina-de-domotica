<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>administracion</title>

</head>

<body>
    <form method="POST">
        <h1>registrar</h1>
        <input type="number" name="id" id="id" placeholder="ID" disabled>

        <input type="text" name="nombre"id="nombre" placeholder="nombre" required>
        <input type="number" name="precio" id="precio" placeholder="precio" required>
        <input type="number" name="cantidad" id="cantidad" placeholder="cantidad" required>
        <input type="text" name="imagen" id="imagen" placeholder="url imagen" required>
        <input type="text" name="descri" id="descri" placeholder="descripcion principal" required>
        <input type="text" name="descri2" id="descri2" placeholder="descripsion secundaria" required>
<input type="submit" class="boton" value="registrar" name="registrar" >

<input type="submit" class="boton" value="buscar" name="buscar" >

    </form>
    <form  method="post">
    <input class="boton" type="submit" name="volver" value="Volver"></form>
    <?php
    
    ?>
</body>
</html>