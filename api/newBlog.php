<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Grupo Ecoplaza" name="author">
    <title>Ecoplaza Inmobiliaria </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/blog.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/newBlog.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">
    <!-- Theme CSS -->
    <script src="https://kit.fontawesome.com/88c0a098dd.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include_once 'header.php';
    ?>
    <main class="container-xxl p-0 overflow-hidden main-blog position-relative d-flex justify-content-center mb-5">
        <!-- Slider main container -->
        <div class="swiper-blog w-100">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper ">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="https://perderelrumbo.com/wp-content/uploads/2023/02/Cabanas-en-el-bosque-y-en-los-arboles.-Galicia-1.webp" alt="1">
                </div>
                <div class="swiper-slide"><img src="https://i.pinimg.com/originals/e6/2c/c1/e62cc1faf9ff8dccb21a68a1d825a74c.jpg" alt="1"></div>
                <div class="swiper-slide"><img src="https://i.pinimg.com/originals/54/f9/9a/54f99ac8b8477db087a20532e30b9e43.jpg" alt="1"></div>
            </div>
        </div>
        <!-- informacion y btn controlador -->
        <div class="container-xl position-absolute top-50 text-white controler-swiper d-flex align-items-center gap-4">
            <!-- If we need navigation buttons -->
            <span class="d-flex flex-column gap-3">
                <div class="swiper-button-prev-blog"><i class=" fs-2 fa-regular fa-circle-up"></i></div>
                <div class="swiper-button-next-blog"><i class=" fs-2 fa-regular fa-circle-down"></i></div>
            </span>
           <div>
            <h1 class="family-700-one fs-4 w-50 mb-0">Somos una inmobiliaria peruana que pone a tu
                disposición desarrollos residenciales que garanticen un,
            </h1>
            <span class="d-flex gap-3"><p class="mb-0">horario de publicaciones</p> <strong class="mb-0 text-green">horarios de salidas</strong></span>
           </div>
        </div>
    </main>
    <?php  include 'blog.php';?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs'

    const swiperblog = new Swiper('.swiper-blog', {
        // Optional parameters
        parallax: true,
        autoplay: {
            delay: 5000,
        },
        direction: 'vertical',
        loop: true,
        centeredSlides: true,
        roundLengths: true,
        mousewheel: true,
        grabCursor: true,
        speed: 1000,
        slidesPerView: 1,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next-blog',
            prevEl: '.swiper-button-prev-blog',
        },
    });
</script>

</html>