<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/detailsBlog.css">
    <title>Document</title>
</head>

<body>
    <?php
    include_once 'header.php';
    ?>

    <main class="container-fluid bg-main-detailsBlogs d-flex justify-content-center align-items-center">
        <div class="container-xl w-75 text-white">
            <h1 class="px-5 text-center">Explorando los mejores atractivos turísticos de
                la ciudad de Huanta, Ayacucho: Un Destino Inolvidable</h1>
            <p class="text-center">16 de agosto de 2023</p>
        </div>
    </main>
    <!-- <h2 class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima maiores dolorum, et dignissimos aperiam cupiditate eaque</h2> -->
    <section class="container-xl py-5 d-flex justify-content-center align-items-center flex-column">
        <div class="row">
            <div class="col-9">
                <div class="container-section">
                    <h2 class=" mb-3"><strong>El Cristo Blanco</strong></h2>
                    <p class="">
                        Hoy conocerás un poco más de Huanta, un tesoro escondido en las alturas de
                        los Andes peruanos. Si eres alguien que busca nuevos espacios para vivir o un
                        viajero aventurero en busca de nuevas experiencias culturales y paisajes impresionantes,
                        Huanta es el destino perfecto para ti. Ubicado en la región de Ayacucho, este encantador
                        rincón del Perú ofrece una combinación única de historia, tradición y muchos lugares turísticos
                        que debes conocer. Acompáñanos en este breve viaje para descubrir algunos de ellos.
                    </p>
                    <div style="height:400px">
                        <img class="img-detail-blog" src="https://gruporobles.com.pe/storage/blog//7FSPV.jpg" alt="">
                    </div>
                </div>


                <div class="container-section">
                    <h2 class=" mb-3"><strong>El Cristo Blanco</strong></h2>
                    <p class="">
                        Hoy conocerás un poco más de Huanta, un tesoro escondido en las alturas de
                        los Andes peruanos. Si eres alguien que busca nuevos espacios para vivir o un
                        viajero aventurero en busca de nuevas experiencias culturales y paisajes impresionantes,
                        Huanta es el destino perfecto para ti. Ubicado en la región de Ayacucho, este encantador
                        rincón del Perú ofrece una combinación única de historia, tradición y muchos lugares turísticos
                        que debes conocer. Acompáñanos en este breve viaje para descubrir algunos de ellos.
                    </p>
                    <div style="height:400px">
                        <img class="img-detail-blog" src="https://gruporobles.com.pe/storage/blog//15cAl.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <strong class="mb-3">Blogs destacados</strong>
                <div class="mb-4">
                    <?php
                    $styled = "height:150px";
                    $cardClass = "flex-column";
                    include 'components/cardBlogs.php';
                    ?>
                </div>
                <div class="mb-4">
                    <?php
                    $styled = "height:150px";
                    $cardClass = "flex-column";
                    include 'components/cardBlogs.php';
                    ?>
                </div>
                <div>
                    <?php
                    $styled = "height:150px";
                    $cardClass = "flex-column";
                    include 'components/cardBlogs.php';
                    ?>
                </div>

            </div>
        </div>
    </section>
</body>

</html>