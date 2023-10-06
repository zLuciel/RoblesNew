<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Grupo Ecoplaza" name="author">
    <title>Ecoplaza Inmobiliaria </title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/blog.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">
    <!-- Theme CSS -->
    <script src="https://kit.fontawesome.com/88c0a098dd.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php

    include_once 'header.php';
    ?>
    <article class="container-xxl container-xl">
        <div class="row row-cols-1 row-cols-xl-2 row-cols-lg-2 row-cols-md-1">

            <div>
                <div class="position-relative picture-blog-principal">
                    <img class="img-blog-principal" src="https://amersursac.com/wp-content/uploads/2023/08/BLOG_03.jpg" alt="">
                </div>
                <div>
                    <blockquote>Publicado el 15 de agosto de 2023</blockquote>
                    <h2>7 estilos de casas de campo para construir en un terreno de 500 m2</h2>
                    <p>Las casas de campo tienen un atractivo innegable,
                        ofreciendo un escape idílico de la agitación de
                        la vida urbana y brindando la oportunidad de
                        sumergirse en la serenidad de la naturaleza.
                        Si cuentas con un generoso terreno de 500 m2, estás
                        en una posición envidiable para dar vida a tus sueños de
                        una casa de […]</p>
                        <button type="button" class="btn border border-dark px-4 ">Leer más</button>
                </div>

            </div>


            <div class="d-none d-xl-flex d-lg-flex   flex-column gap-5">
                <?php

                for ($i = 0; $i < 3; $i++) {
                    include 'components/cardBlogs.php';
                }
                ?>
            </div>
        </div>

        <section class="py-5">
            <div class="d-flex justify-content-between py-3">
                <h2>Últimas actualizaciones</h2>
                <label><input type="search" placeholder="Buscar..."></label>
            </div>
            <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 g-5">
                <?php
                $cardClass = "flex-column";
                for ($i = 0; $i < 8; $i++) {
                    include 'components/cardBlogs.php';
                }
                ?>
            </div>
        </section>

    </article>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>