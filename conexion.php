<?php
$servername = "localhost";
$database = "Tienda_Web";
$username = "root";
$password = "kac101299";
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
 

?>