<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Grupo Ecoplaza" name="author">
    <title>Ecoplaza Inmobiliaria </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/blog.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/proyectos.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">
    <!-- Theme CSS -->
    <script src="https://kit.fontawesome.com/88c0a098dd.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include_once 'header.php';
    ?>
    <section class="container-xl py-4">
        <h1 class="text-center family-700-one color-green-2">Proyectos</h1>
        <!--container  filtrado  -->
        <div class="shadow-filter-proyect">
            <span class="d-flex mb-3 family-700-one">Encuentra el proyecto ideal</span>
            <div class="row row-cols-3 g-4 align-items-center">
                <label class="d-flex flex-column gap-1 border-end px-4 family-700-one">
                    ¿Qué ubicación estás buscando?
                    <div class="d-flex gap-2 align-items-center">
                        <i class="fa-solid fa-location-dot"></i>
                        <select id="proyecto" name="proyecto" class="form-select raleway-medium" aria-label="Default select example">
                            <option selected>
                                <Open>Seleccionar
                            </option>
                            <option value="Lima">Lima</option>
                            <option value="Huaral">Huaral</option>
                            <option value="3">Larcomar</option>
                        </select>
                    </div>
                </label>
                <label class="d-flex flex-column gap-1 border-end px-4 family-700-one">
                    Tipo de propiedad
                    <div class="d-flex gap-2 align-items-center">
                        <i class="fa-solid fa-house-flag"></i>
                        <select id="typeProyect" name="departamento" class="form-select raleway-medium" aria-label="Default select example">
                            <option selected>
                                <Open>Seleccionar
                            </option>
                            <option value="Cabaña">Cabaña</option>
                            <option value="Robles">Robles</option>
                            <option value="3">nose</option>
                        </select>
                    </div>
                </label>
                <div class="px-5">
                    <button id="buscar-proyecto" class="btn d-flex gap-3 align-items-center justify-content-center bg-terce text-white w-100">
                        Buscar <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
        </div>

        <section class="container-xl py-4">
            <div id="container-proyect-filter" class="row row-cols-3 g-4">
               
            </div>
        </section>
    </section>

    <?php
    include_once 'footer.php';
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="module" src="js/proyectos.js"></script>


</html>