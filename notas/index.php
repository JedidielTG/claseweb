<!DOCTYPE html>
<html lang="en" >


<head>
<title>Title</title>

<!-- Required meta tags -->
<meta charset="utf-8"  />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


<!-- Bootstrap CSS v5.2.1 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
</head>

<body>
<style>
    body {
        background-color: darkcyan;
    }
    </style>
    <section>
    <h1 class="text-light mb-0 p-1 fs-2 w-100 justify-content-center d-flex fw-bold" > Formulario de Contacto </h1>
    <p class="text-light mb-0 p-6 fs-5 w-100 justify-content-center d-flex"> Alumno: Jedidiel Toto Garcia.          Asignatura: Desarrollo Web.         Docente: Luis Fernando Villafaña. </P>
    <p class="text-light mb-0 p-6 fs-5 w-100 justify-content-center d-flex"> Universidad del sur campus online.  5° Cuatrimeste</P>
    <!-- place navbar here --> 
    </section>
    <main>
    <div class="container h-100" style="padding-top: 3rem;">
        <div class="row justify-content-center align-item-center h-100">
            <div class="cal-12 col-sm-12 col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <form action="./function/insert.php" method="post">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nombre de la nota</label>
                                <input name="titulo" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Contenido</label>
                                <textarea name="contenido" type="text" class="form-control"  ></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
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
                                <th scope="col">Nombre de la nota</th>
                                <th scope="col">Contenido</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    require("./connection/connection.php");
                                    $query = "SELECT * FROM nota";
                                    $ejecutar = mysqli_query($connection, $query);
                                    $contador = 1;
                                    while($fila = mysqli_fetch_array($ejecutar)){
                                    ?>
                                    <tr>
                                    <td><?php echo $contador;?></td>
                                    <td><?php echo $fila['titulo'];?></td>
                                    <td><?php echo $fila['contenido'];?></td>
                                    <td><a href="./function/delete.php?id=<?php echo $fila['id'];?>">eliminar</a></td>
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
</body>
</html>

