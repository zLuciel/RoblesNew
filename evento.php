<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/evento.css">
    <script src="https://kit.fontawesome.com/88c0a098dd.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include_once 'header.php';
    ?>
    <!-- <main class="mb-5 position-relative p-0 container-fluid bg-main-evento ">
        <div class=" px-5 text-white gradient-event ">
            <div class="container-xl h-100 position-relative d-flex flex-column justify-content-center">
                <p class="mb-2">1st to 10 March 2019, Gold-Land Hotel, Canada</p>
                <h1 class="w-50 mb-4" style="font-size: 4rem;"><strong>World Digital Conference 2020</strong></h1>
                <button type="button" class="color-green btn px-5 py-2 text-white" style="width: max-content;"><strong>Ver Evento</strong></button>
                <div style="width: 400px;" class="overflow-hidden position-absolute container-img-absolute">
                    <img src="https://lordinmobiliaria.pe/wp-content/uploads/2023/10/Niko-3.png" alt="anime">
                </div>
            </div>
        </div>
    </main> -->

    <section class="container-xl">
        <div class="border-cards py-4">
            <span class="d-inline-block mb-3">
                <p class="mb-1">Recientes</p>
                <h2 style="font-weight: 700;">Nuestros Eventos
                </h2>
            </span>
            <div class="row row-cols-3 g-5">
                <?php
                include 'components/cardEvent.php';
                include 'components/cardEvent.php';
                include 'components/cardEvent.php';
                ?>
            </div>
        </div>

    </section>

    <section class="container-xl mb-4">
        <div class="border-cards py-4">
            <span class="d-inline-block mb-3">
                <p class="mb-1">Noviembre</p>
                <h2 style="font-weight: 700;">2023
                </h2>
            </span>
            <div class="row row-cols-3 g-5">
                <?php
                include 'components/cardEvent.php';
                include 'components/cardEvent.php';
                include 'components/cardEvent.php';
                ?>
            </div>
        </div>

    </section>

    <section class="container-xl mb-4">
        <div class="py-4">
            <span class="d-inline-block mb-3">
                <p class="mb-1">Noviembre</p>
                <h2 style="font-weight: 700;">2023
                </h2>
            </span>
            <div class="row row-cols-3 g-5">
                <?php
                include 'components/cardEvent.php';
                include 'components/cardEvent.php';
                include 'components/cardEvent.php';
                ?>
            </div>
        </div>

    </section>
    <?php
    include_once 'footer.php';
    ?>
</body>

</html>