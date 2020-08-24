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
        <input type="number" name="id" id="id" placeholder="ID" required>

<input type="submit" class="boton" value="buscar" name="buscar" >
    </form>
    <?php include('buscar.php'); ?>
    <form  method="post"><input class="boton" type="submit" name="volver" value="Volver"></form>
    
</body>
</html>
<?php
if (isset($_POST['volver'])) {
   
    header("location: administrador.php");
}

?>