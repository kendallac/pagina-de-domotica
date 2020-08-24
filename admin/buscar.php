<?php 
 if (isset($_POST['buscar'])) {
   
   

$id=$_POST['id'];
                    include('../conexion.php');
                    $resultado=$conn ->query("SELECT * FROM `Productos` WHERE id='$id'
                    ")or die($conn->error);
                    while ($fila= mysqli_fetch_array($resultado)) {

?>
<form method="post">


    <input type="number" name="id" id="id" placeholder="id" value="<?php echo $id?>" required>
    <input type="text" name="nombre" id="nombre" placeholder="nombre" value="<?php echo $fila['nombre']?>" required>
    <input type="number" name="precio" id="precio" placeholder="precio" value="<?php echo $fila['precio']?>" required>
    <input type="number" name="cantidad" id="cantidad" placeholder="cantidad" value="<?php echo $fila['cantidad']?>"
        required>
    <input type="text" name="imagen" id="imagen" placeholder="url imagen" value="<?php echo $fila['imagen']?>" required>
    <input type="text" name="descri" id="descri" placeholder="descripcion principal"
        value="<?php echo $fila['detalles']?>" required>
    <input type="text" name="descri2" id="descri2" placeholder="descripsion secundaria"
        value="<?php echo $fila['detalles2']?>" required>
    <input type="submit" class="boton" value="actualizar" name="actualizar">
    <input type="submit" class="boton" value="eliminar" name="eliminar">




</form>

<?php
                            }
                            }
                            include("logicabuscar.php");

                            ?>
