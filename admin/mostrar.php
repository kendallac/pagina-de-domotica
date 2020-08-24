<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mostrar.css">
    <title>Document</title>
</head>

<body>




    <div class="tabla">

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nombre</th>
                    <th>precio</th>
                    <th>cantidad</th>
                    <th>imagen</th>
                    <th>descripcion</th>
                    <th>descripcion 2</th>
                    <th>fecha</th>
                </tr>
            </thead>
            <?php 
                    include('../conexion.php');
                    $resultado=$conn ->query("SELECT * FROM Productos ")or die($conn->error);
                    while ($fila= mysqli_fetch_array($resultado)) {

?>
            <tr>
            <td><?php echo $fila['id'] ?> </td>
                <td><?php echo $fila['nombre'] ?> </td>
                <td><?php echo $fila['precio'] ?></td>
                <td><?php echo $fila['cantidad'] ?>$</td>
                <td><?php echo $fila['imagen'] ?></td>
                <td><?php echo $fila['detalles']?></td>
                <td> <?php echo $fila['detalles2']?> </td>
                <td> <?php echo $fila['fecha']?> </td>
            </tr>

            <?php
                            }
                            ?>

        </table>
<a class="boton" href="administrador.php">volver</a>
</body>

</html>