<?php
require("../connection/connection");

$query = "SELECT * FROM usuario";

$ejecutar = mysqli_query($connection, $query);

$contador = 1;

while ($fila = mysqli_fetch_array($ejecutar)) {

    ?>
    <tr>
    <td><?php echo $contador;?></td>
        <td><?php echo $fila['nombre'];?></td>
        <td><?php echo $fila['email'];?></td>
        <td><?php echo $fila['tel'];?></td>
        <td><?php echo $fila['Mensajes'];?></td>
        <td><a href="./view/update_form.php?id=<?php echo $fila[ 'id_usuario' ]; ?>"><i class="bi bi-pencil-square text-warning"></i></a></td>
        <td><a href="./function/delete.php?id=<?php echo $fila[ 'id_usuario' ]; ?>"><i class="bi bi-trash2-fill text-danger"></i></a></td>
    </tr>
    <?php $contador++;
} ?>