<?php
require("conexion.php");


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light lateralbar" style="width: 100%;">
                    <a href="/"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32">
                            <use xlink:href="#bootstrap" />
                        </svg>
                        <img src="sodimac.png" class="logo_sodimac" alt="">
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link active" aria-current="page">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#home" />
                                </svg>
                                OSB
                            </a>
                        </li>
                        <li>
                            <a href="terciado.php" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2" />
                                </svg>
                                TERCIADO
                            </a>
                        </li>
                        <li>
                            <a href="paneles_sip.php" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#table" />
                                </svg>
                                PANELES SIP
                            </a>
                        </li>

                </div>
            </div>
            <div class="col-10 ">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">PANELES DE ADMINISTRACIÓN/ MADERAS Y TABLEROS</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarText">



                        </div>
                    </div>
                </nav>
                <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores tenetur laboriosam
                    quam nesciunt quis recusandae odit culpa numquam corrupti ratione, totam suscipit aperiam. Animi
                    ducimus beatae excepturi magnam sint mollitia!
                    Deserunt modi rerum voluptates quia! Facilis modi voluptas totam nobis temporibus similique, quos
                    assumenda placeat possimus, velit nostrum, officia aspernatur nisi cumque quasi. Tenetur ratione
                    maiores asperiores inventore, officiis saepe!</p>
                <hr>
                <div class="col-4 offset-4 mt-5">
                    <div class="card panel">
                        <img src="osb.jpg" class="card-img-top" alt="...">

                    </div>

                </div>
                <form action="guardar.php" method="POST">
                    <div class="row d-flex justify-content-center">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="marca" class="form-label">Marca</label>
                                <input type="text" class="form-control" id="marca" name="descripcion">
                               
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion">
                            </div>

                            <div class="mb-3">
                                <label for="sku" class="form-label">SKU</label>
                                <input type="text" class="form-control" id="sku" name="sku">
                            </div>

                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" id="precio" name="precio">
                            </div>
                  
                            <button type="submit" class="btn btn-outline-primary d-flex justify-content-center w-100">Guardar</button>
                        </div>
                    </div>
                </form>

            </div>



        </div>

    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>