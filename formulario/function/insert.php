<?php

print_r($_POST);

require('../connection/connection.php');

$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$telefono = $_POST ['telefono'];
$Mensajes = $_POST ['Mensajes'];

$query = "INSERT INTO usuario (nombre,email,tel,Mensajes) VALUES ('$nombre','$email','$telefono','$Mensajes')";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

//print("<br> Nombre del usuario: " . $nombre . "Email:" . $email ."Tel:" . $telefono);//
//echo "<br> Nombre del usuario: {$nombre} Email: {$email} Tel: {$telefono}";//

?>
