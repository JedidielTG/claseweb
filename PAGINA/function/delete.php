<?php


require('../connection/connection.php');

$id = $_GET['id'];

$query = "DELETE FROM pagina WHERE id_usuario = '$id'";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>