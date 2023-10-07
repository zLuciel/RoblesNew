<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta content="Grupo Ecoplaza" name="author">
  <title>Ecoplaza Inmobiliaria </title>

  <!-- SWIPER -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/font.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">
  <!-- Theme CSS -->
  <script src="https://kit.fontawesome.com/88c0a098dd.js" crossorigin="anonymous"></script>

</head>

<body class="position-relative">

  <?php

  include_once 'header.php';
  ?>

  <!-- Main -->
  <main class="main container-fluid d-flex align-items-center">
    <div class="container-xl container-lg container-md container-sm d-flex align-items-center " >
      <div class="row g-4 justify-content-center align-items-center">
        <div class="col-xl-6">
          <h1 class="family-700-one">Tu <br> propiedad sin fronteras</h1>
          <button type="button" class="btn btn-propiedad-main py-3 btn-link raleway-medium text-white  border border-white">
            VER PROPIEDADES <i class=" fa-solid fa-arrow-right-long"></i>
          </button>
        </div>
        <div class="col-xl-6 fs-6 align-self-xl-start align-self-lg-end text-info-main">
          <p>Descubre tu hogar ideal sin fronteras. Nosotros, llevamos tus sueños más allá de límites geográficos. Encuentra tu propiedad perfecta, donde sea que esté, con nosotros.</p>
        </div>
      </div>
    </div>
  </main>

  <!-- Nuestros proyectos -->
  <section class="container-xl  py-5">
    <h2 class="text-center mb-5 title-proyect family-700-one">NUESTROS PROYECTOS</h2>
    <!-- Slider main container -->
    <div class="swiper h-100 w-100 d-flex justify-content-center align-items-center">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper" id="swiper-padre">
        <!-- Slides -->

      </div>
      <!-- Paginado slider -->
      <div class="swiper-pagination"></div>

    </div>
  </section>


  <!-- Section Años de experencia -->
  <section class="container-xl container-experiencia px-4">
    <div class="row row-cols-xl-2 row-cols-lg-2 row-cols-md-1 justify-content-between g-4 align-items-center">
      <div class=" d-flex flex-column gap-3">
        <h2 class="family-700-one color-green-2">Amersur Perú: 15 Años de Experiencia Inmobiliaria a Tu Servicio</h2>
        <p>¿Por qué confiar en Amersur Perú? Con una
          sólida trayectoria de 15
          años en el rubro inmobiliario,
          somos tu elección segura. Nuestra experiencia
          respalda proyectos exitosos, mientras que nuestro
          profesionalismo, variedad de opciones y equipo
          especializado garantizan tu satisfacción. Innovamos
          y nos adaptamos constantemente para ofrecerte lo mejor.
        </p>
        <ul class="list-group">
          <li class="d-flex gap-2 align-items-center raleway-medium">
            <i style="font-size: 2rem;" class="fa-solid fa-square-check text-green"></i>
            Nuestros clientes satisfechos hablan por nosotros.
          </li>
          <li class="d-flex gap-2 align-items-center raleway-medium"><i style="font-size: 2rem;" class="fa-solid fa-square-check text-green"></i> En Amersur Perú, tu inversión está en manos expertas.</li>
        </ul>
      </div>
      <div class=" d-flex justify-content-xl-end justify-content-lg-end justify-content-md-start">
        <img src="https://amersursac.com/wp-content/uploads/2023/08/IMG_IMFORMATIVA.jpg" alt="15 Años de Experiencia">
      </div>
    </div>
  </section>


  <!-- Section Noticias -->
  <section class="container-xxl text-white py-4 mb-5">
    <div class="row row-cols-xl-2 row-cols-lg-2 row-cols-md-1 justify-content-center">
      <div class="bg-campo d-flex gap-5 flex-column">
        <button type="button" class="btn-superior-noticia btn py-1 btn-link text-white  border border-white raleway-medium">Casas de campo</button>
        <h2>7 estilos de casas de campo para construir en un terreno de 500 m2</h2>
        <button type="button" class="btn py-2 px-4 btn-ver-mas-noticias raleway-medium">VER MÁS <i class="fa-solid fa-arrow-right-long"></i></button>
      </div>
      <div class=" align-self-center container-slider-col2 position-relative">
        <!-- swiper noticias -->
        <div class="swiper-noticias py-4">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <!-- slider 1 -->
            <div class="swiper-slide rounded-3 overflow-hidden">

              <?php
              $img = "https://amersursac.com/wp-content/uploads/2023/08/BLOG_07.jpg";
              include "components/cardNoticia.php" ?>
            </div>
            <!-- slider 2 -->
            <div class="swiper-slide rounded-3 overflow-hidden">
              <?php
              $img = "https://i.vimeocdn.com/video/1413719557-8a786163d552098aeb0c68b6ddf2b4c840f5015c2674bd26e8bc0dd9c7491e62-d_640x360.jpg";
              include "components/cardNoticia.php" ?>
            </div>

            <!-- slider 3 -->
            <div class="swiper-slide rounded-3 overflow-hidden">

              <?php
              $img = "https://s.zefirka.net/images/2016-09-05/nebolshie-no-uyutnye-domiki/nebolshie-no-uyutnye-domiki-1.jpg";
              include "components/cardNoticia.php" ?>
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-pagination noticias"></div>
        </div>


      </div>
    </div>
    </div>
  </section>

  <!-- redes sociales -->
  <?php
  include_once 'components/redesFloat.php';
  ?>
  <!-- footer -->
  <?php
  include_once 'footer.php';
  ?>


  <!-- Libs JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <script src="js/modalHeaderEffect.js"></script>
  <script type="module" src="js/main.js"></script>
  <script src="js/hamburger.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs'

    const swiper = new Swiper('.swiper', {
      // Optional parameters
      autoplay: {
        delay: 4000,
      },
      loop: true,
      spaceBetween: 30,
      slidesPerView: 1,
      // Navigation arrows
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },

      breakpoints: {
        // when window width is >= 320px
        420: {
          slidesPerView: 1,
        },
        // when window width is >= 480px
        600: {
          slidesPerView: 2,
        },
        // when window width is >= 640px
        1000: {
          slidesPerView: 3,
        }
      }
    });

    const swiperNoticias = new Swiper('.swiper-noticias', {
      // Optional parameters
      loop: true,
      spaceBetween: 5,
      slidesPerView: 2,
      // Navigation arrows
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        // when window width is >= 320px
        420: {
          slidesPerView: 1,
        },
        // when window width is >= 480px
        600: {
          slidesPerView: 2,
        },
        // when window width is >= 640px
        1000: {
          slidesPerView: 2,
        }
      }
    });
  </script>
</body>

</html>