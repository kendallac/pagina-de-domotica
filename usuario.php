<?php
session_start();
if (isset($_SESSION['nombre'])) {
   echo "  <div class=usu><img class=lo src=img/usuarios.png><p class=pe> $_SESSION[nombre]</p> <a href=logout.php>Cerrar Sesión</a></div>";
}else{
  echo  "<div class=usu> <img class=lo src=img/usuarios.png><p class=pe> usuario</p></div>";
}

?>