<!-- Sistena control de usuario 
formulario: 
    nombre completo
    email
    numero telefonico
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>TU CPU</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
</head>

<body>
    <header>
    <!-- place navbar here -->
    </header>
    <main>
    <div class="container h-100" style="padding-top: 4rem;">
        <div class="row justify-content-center align-item-center h-100">
        <div class="cal-12 col-sm-12 col-md-3 mb-3">
            <div class="card">
            <div class="card-body">
                <form action="./function/insert.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Procesador</label>
                    <input name="Procesador" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Caracteristicas</label>
                    <input name="caracteristica" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Marca</label>
                    <input name="marca" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input name="precio" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-9">
            <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Procesador</th>
                    <th scope="col">Caracteristicas</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require("./connection/connection.php");

                  $query = "SELECT * FROM pagina";

                    $ejecutar = mysqli_query($connection, $query);

                    $contador = 1;

                    while($fila = mysqli_fetch_array($ejecutar)){

                    ?>
                    <tr>
                    <td><?php echo $contador;?></td>
                    <td><?php echo $fila['Procesador'];?></td>
                    <td><?php echo $fila['caracteristicas'];?></td>
                    <td><?php echo $fila['marca'];?></td>
                    <td><?php echo $fila['precio'];?></td>
                    <td><a href="./function/delete.php?id=<?php echo $fila['id_usuario'];?>">eliminar</a></td>
                    </tr>
                    <?php $contador++;} ?>
                </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </main>
    <footer>
    <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
</body>

</html>