<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Grupo Ecoplaza" name="author">
    <title>Ecoplaza Inmobiliaria </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/contactanos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/formulario.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">
    <!-- Theme CSS -->
    <script src="https://kit.fontawesome.com/88c0a098dd.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php

    include_once 'header.php';
    ?>
    <!-- Estas a un paso de tu lote ideal -->
    <section class="container-xl py-5">
        <div class="row row-cols-1 row-cols-xl-2 row-cols-lg-2 row-cols-md-2">
            <div class="d-flex flex-column">
                <h1 class="family-700-one">Estas a un paso de tu
                    lote ideal
                </h1>
                <p>Amersur te ofrece la oportunidad de
                    hacer realidad tu sueño de tener
                    tu propio lote en una de las zonas
                    más hermosas de Huaral. Nuestra amplia
                    oferta de terrenos te permitirá elegir
                    el espacio perfecto para construir la
                    casa de tus sueños o invertir en un
                    futuro próspero.
                </p>
                <div style="height: 273px;">
                    <img class="img-fluid-cover" src="https://amersursac.com/wp-content/uploads/2023/08/PORTADA_CONTACTANOS.jpg" alt="">
                </div>
                <p>Con años de experiencia en el mercado inmobiliario y un compromiso inquebrantable con la calidad y satisfacción del cliente, Amersur te brinda asesoría personalizada durante todo el proceso de adquisición.</p>
                <h2>Lima,Hural</h2>

                <div class="d-flex flex-column gap-3">
                    <div class="d-flex gap-3 justify-content-between align-items-start">
                        <span class="d-flex gap-3 align-items-center">
                            <i class="fa-solid fa-location-dot text-green"></i>
                            Lotización Colán Zamudio Mz. B Lt. 1 | Ref. Av. El Palmo, Frente al Mercado de Frutas - Huaral
                        </span>

                        <span class="d-flex gap-3 align-items-center">
                            <i class="fa-solid fa-envelope text-green"></i>
                            info@amersursac.com
                        </span>
                    </div>
                    <span class="d-flex gap-3 align-items-center text-green">
                        <i class="fa-solid fa-phone"></i>
                        951378285
                    </span>
                    <span class="d-flex gap-3 align-items-center text-green">
                        <i class="fa-solid fa-phone"></i>
                        951378285
                    </span>
                </div>
            </div>
            <!-- column 2 -->
            <div>
                <?php
                $class = "w-100 d-flex justify-content-center align-items-center";
                include_once 'components/formulario.php';
                ?>
            </div>
        </div>
    </section>

    <section class="container-fluid py-5 mb-4">
        <h2 class="text-center family-700-one">Ven a conocernos y descubre tu lote ideal</h2>
        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125070.8462172627!2d-77.3717797566406!3d-11.590235500000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9106891587f7414f%3A0x2fa0123ed14cd912!2sMercado%20de%20frutas%20El%20Palmo%20Huaral!5e0!3m2!1ses!2sus!4v1696352879526!5m2!1ses!2sus" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!-- footer -->
    <?php
    include_once 'footer.php';
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>