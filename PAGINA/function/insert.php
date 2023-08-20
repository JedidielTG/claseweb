<?php

print_r($_POST);

require('../connection/connection.php');

$Procesador = $_POST ['Procesador'];
$caracteristica = $_POST ['caracteristica'];
$marca= $_POST ['marca'];
$precio = $_POST ['precio'];

$query = "INSERT INTO pagina (Procesador,caracteristicas,marca,precio) VALUES ('$Procesador','$caracteristica','$marca','$precio')";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");



?>
