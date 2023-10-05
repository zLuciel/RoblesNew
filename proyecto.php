<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Grupo Ecoplaza" name="author">
    <title>Ecoplaza Inmobiliaria </title>
    <!-- Bootstrap CSS -->
    <!-- SWIPER -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/formulario.css">
    <link rel="stylesheet" href="assets/css/proyectDetail.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">
    <!-- Theme CSS -->
    <script src="https://kit.fontawesome.com/88c0a098dd.js" crossorigin="anonymous"></script>
</head>

<body class="position-relative">

    <?php
    include_once 'header.php';
    ?>

    <main class="container-fluid text-center p-5 bg-main">
        <div class="position-absolute top-0 video-proyect-main">
            <video src="assets/video/banner.mp4" autoplay muted loop></video>
        </div>
        <div class="container-xl container-main-margin">
            <div class="d-flex flex-column gap-4 width-max-proyect">
                <div style="width: max-content;" class="text-white text-start trans-main-proyect-green py-2 px-4 rounded-3">
                    <p style="font-weight: 300;" class="mb-0">CONDOMINIO</p>
                    <h1 style="font-weight: 500;" class="raleway-medium">EL ABRA</h1>
                </div>

                <div class="container-title-info-main d-flex text-white justify-content-between align-items-center">
                    <h2 style="font-weight: 700;" class="text-start">Desconectate de la ciudad</h2>
                    <button type="button" class="btn px-4 bg-white text-nowrap py-2 raleway-medium fs-6 text-green shadow" style="height: max-content;">Descargar brochurer <i class="fa-solid fa-download"></i></button>
                </div>
                <!-- section main cuadro -->
                <div class="row raleway-medium container-grid-main-cuadro  fs-3 py-3 row-cols-4 bg-white  justify-content-between  rounded-2 ">
                    <div class="d-flex gap-2 flex-column  align-items-center">
                        <img style="height: 30px; width:30px" src="https://elabra.pe/wp-content/uploads/2023/06/lotes.svg" alt="">
                        <h6 class="text-gris fs-6">19 lotes desde 425 m2</h6>
                    </div>
                    <div class="d-flex gap-2 flex-column align-items-center">
                        <img style="height: 30px; width:30px" src="https://elabra.pe/wp-content/uploads/2023/06/map.svg" alt="">
                        <h6 class="text-gris fs-6">Oxapampa</h6>
                    </div>
                    <div class="d-flex gap-2 flex-column align-items-center">
                        <img style="height: 30px; width:30px" src="https://elabra.pe/wp-content/uploads/2023/06/tiempo-pin.svg" alt="">
                        <h6 class="text-gris">A 10 minutos de la plaza central de Oxapampa</h6>
                    </div>
                    <div class="d-flex gap-2 flex-column align-items-center">
                        <img style="height: 30px; width:30px" src="https://elabra.pe/wp-content/uploads/2023/06/cash-pin.svg" alt="">
                        <h6 class="text-gris fs-8">Separa con S/5,000 y una inicial del 40%</h6>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <!-- SECTION SUB-NAV -->
    <div class="container-xxl raleway-medium bg-gris position-sticky top-0" style="z-index: 4;">
        <div class="container-xl sub-nav-container ">
            <div class="d-flex gap-1 navegador-proyect  align-items-center py-2" style="width: 700px;">
                <div class="sub-nav border-end border-dark px-3 position-relative link-proyect">Ubicación</div>
                <div class="sub-nav border-end border-dark px-3 position-relative">Acerca</div>
                <div class="sub-nav border-end border-dark px-3 position-relative">Galería</div>
                <div class="sub-nav border-end border-dark px-3 position-relative">Planos</div>
                <div class="sub-nav border-end border-dark px-3 position-relative">Conoce la zona</div>
                <div class="sub-nav border-end border-dark px-3 position-relative">El Abra</div>
            </div>
        </div>
    </div>

    <!-- Ubicanos -->
    <section id="ubicación" class="container-xxl bg-white py-5 px-3">
        <div class="container-xl">
            <span>
                <h2 style="font-weight: 700;" class="color-green-2">Ubicación</h2>
                <p class="sub-title-section">La mejor zona para vivir</p>
            </span>
            <!-- iconos infon -->
            <div class="row row-cols-2 py-2 mb-4 gy-4 width-max-proyect align-items-center justify-content-center">
                <div class="d-flex gap-4 align-items-center">
                    <img style="height: 42px;width:42px" src="https://elabra.pe/wp-content/uploads/2023/06/cerca-delugar.svg" alt="">
                    <p class="mb-0">A sólo 10 minutos de la plaza
                        central de Oxapampa</p>
                </div>
                <div class="d-flex gap-4 align-items-center">
                    <img style="height:42px;width:42px" src="https://elabra.pe/wp-content/uploads/2023/06/tiempo-pin.svg" alt="">
                    <p class="mb-0">A 100 metros del monumento de Oxapampa</p>
                </div>
                <div class="d-flex gap-4 align-items-center">
                    <img style="height: 42px;width:42px" src="https://elabra.pe/wp-content/uploads/2023/06/cruce.svg" alt="">
                    <p class="mb-0">A 5 minutos de la
                        Casa Museo Schlaefli</p>
                </div>
                <div class="d-flex gap-4 align-items-center">
                    <img style="height: 42px;width:42px" src="https://elabra.pe/wp-content/uploads/2023/06/varios-accesos.svg" alt="">
                    <p class="mb-0">A 16 minutos caminando de la catarata del rio tigre</p>
                </div>
            </div>
            <div class="width-max-proyect position-relative">
                <div class="d-flex gap-3 position-absolute bottom-0 w-100 align-items-center justify-content-center px-3 py-2">
                    <a class="w-100 bg-white py-3 px-3 rounded-2 text-center" href="#" target="_blank"><img src="https://elabra.pe/wp-content/uploads/2023/06/waze-el-abra.svg" alt=""> Ver en Waze</a>
                    <a class="w-100 bg-white py-3 px-3 rounded-2 text-center" href="#" target="_blank"><img src="https://elabra.pe/wp-content/uploads/2023/06/maps-el-abra.svg" alt=""> Ver en Maps</a>
                    <a class="w-100 bg-white py-3 px-3 rounded-2 text-center" href="#" target="_blank"><img src="https://elabra.pe/wp-content/uploads/2023/06/whatsapp-el-abra.svg" alt=""> Compartir</a>
                </div>
                <img class="img-fluid" src="https://elabra.pe/wp-content/uploads/2023/06/mapa-abra-1536x864.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- Caracteristicas -->
    <section id="acerca" class="container-xxl py-5 px-3 bg-gris">
        <div class="container-xl">
            <span>
                <h2 class="family-700-one color-green-2" style="font-weight: 700;">Características</h2>
                <p class="sub-title-section">Garantía para una inversión segura y rentable</p>
            </span>
            <!-- iconos infon -->
            <div class="row row-cols-4 gy-3 width-max-proyect">

                <div>
                    <div class="d-flex h-100 flex-column gap-2 align-items-center bg-white py-3 rounded-2">
                        <img src="https://elabra.pe/wp-content/uploads/2023/06/alumbrado-publico.svg" alt="">
                        <p class="mb-0 fs-9 text-center">Fluido Electrico</p>
                    </div>
                </div>

                <div>
                    <div class="d-flex h-100 flex-column gap-2 align-items-center bg-white py-3 rounded-2">
                        <img src="https://elabra.pe/wp-content/uploads/2023/06/agua-potable.svg" alt="">
                        <p class="mb-0 fs-9 text-center">Agua potable</p>
                    </div>
                </div>

                <div>
                    <div class="d-flex h-100 flex-column gap-2 align-items-center bg-white py-3 rounded-2">
                        <img src="https://elabra.pe/wp-content/uploads/2023/06/varios-accesos.svg" alt="">
                        <p class="mb-0 fs-9 text-center">Vias de acceso</p>
                    </div>
                </div>

                <div>
                    <div class="d-flex h-100 flex-column gap-2 align-items-center bg-white py-3 rounded-2">
                        <img style="height: 41px;width:41px" src="https://elabra.pe/wp-content/uploads/2023/06/parque.svg" alt="">
                        <p class="mb-0 fs-9 text-center">Alumbrado público</p>
                    </div>
                </div>
                <!-- col2 -->
                <div>
                    <div class="d-flex h-100 flex-column gap-2 align-items-center bg-white py-3 rounded-2">
                        <img src="https://elabra.pe/wp-content/uploads/2023/06/portico.svg" alt="">
                        <p class="mb-0 fs-9 text-center">Portico de ingreso</p>
                    </div>
                </div>

                <div>
                    <div class="d-flex h-100 flex-column gap-2 justify-content-center align-items-center bg-white py-3 rounded-2">
                        <img src="https://elabra.pe/wp-content/uploads/2023/06/oprtunidad.svg" alt="">
                        <p class="mb-0 fs-9 text-center">Oportunidad de inversion</p>
                    </div>
                </div>

                <div>
                    <div class="d-flex h-100 flex-column gap-2 justify-content-center align-items-center bg-white py-3 rounded-2">
                        <img src="https://elabra.pe/wp-content/uploads/2023/06/cerco-vivo.svg" alt="">
                        <p class="mb-0 fs-9 text-center">Cerco vivo (entre lotes y perimetrico)</p>
                    </div>
                </div>

                <div>
                    <div class="d-flex h-100 flex-column gap-2 align-items-center bg-white py-3 rounded-2">
                        <img style="height: 41px;width:41px" src="https://elabra.pe/wp-content/uploads/2023/06/cruce.svg" alt="">
                        <p class="mb-0 fs-9 text-center">Caseta de vigilancian las 24 horas</p>
                    </div>
                </div>

                <div>
                    <div class="d-flex h-100 flex-column gap-2 align-items-center bg-white py-3 rounded-2">
                        <img style="height: 41px;width:41px" src="https://elabra.pe/wp-content/uploads/2023/06/areas-comunes-2.svg" alt="">
                        <p class="mb-0 fs-9 text-center">Areas comunes</p>
                    </div>
                </div>
                <div>
                    <div class="d-flex h-100 flex-column gap-2 align-items-center bg-white py-3 rounded-2">
                        <img style="height: 41px;width:41px" src="https://elabra.pe/wp-content/uploads/2023/06/titulo-propiedad.svg" alt="">
                        <p class="mb-0 fs-9 text-center">Titulo de propiedad</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section Galeria  -->
    <section id="galería" class="container-xl py-5">
        <span>
            <h2 style="font-weight: 700;" class="color-green-2">Fotos y videos</h2>
            <p class="sub-title-section">Explora la magia de la naturaleza en cada imagen</p>
        </span>

        <div class="width-max-proyect shadow py-2 px-4">
            <div class="d-flex gap-2">
                <button type="button" class="btn w-100 mb-2 btn-galery-view active-option-galery">Fotos</button>
                <button type="button" class="btn w-100 mb-2 btn-galery-view ">Videos</button>
            </div>
            <!-- swiper proyectos -->
            <div id="fotos-swiper" class="swiper-proyecto d-none active-view-galery position-relative overflow-hidden">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img class="img-fluid" src="https://gruporobles.com.pe/storage/proyectos/valle-orquidea/y3YzH.jpg" alt=""></div>
                    <div class="swiper-slide"><img class="img-fluid" src="https://gruporobles.com.pe/storage/proyectos/valle-orquidea/UEryZ.jpg" alt=""></div>
                    <div class="swiper-slide"><img class="img-fluid" src="https://gruporobles.com.pe/storage/proyectos/valle-orquidea/gBx9t.jpg" alt=""></div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-pagination"></div>

            </div>
            <div id="video-proyect" class="d-none video-proyect position-relative">
                <button id="play-video-galery" class="btn position-absolute top-50 start-50 translate-middle z-2 play-galery" type="button"><i class="text-white fa-brands fa-youtube"></i></button>
                <img id="image-video-proyect" class="img-fluid" src="https://gruporobles.com.pe/storage/banners/new-vo.webp" alt="">
                <div id="video-youtube-galery" class="d-none">
                    <div id="youtube-frame-proyect"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Conoce el proyecto -->
    <section class="container-xl py-5">
        <span>
            <h2 style="font-weight: 700;" class="color-green-2">¡Conoce Oxapampa!</h2>
            <p class="sub-title-section">Reserva de Biósfera</p>
            <p class="width-max-proyect">Es una provincia con alto potencial turístico por sus paisajes naturales, tranquilidad, cultura, raíces europeas y su clima equilibrado. Además, cerca a nuestro proyecto «El Abra», podrás encontrar lugares turísticos como: la Plaza Principal de Oxapampa, Catarata Río Tigre, Manantial de la Virgen, Casa Museo Schlaefli, Chocolatería Amyra y la Cervecería Tres postales.</p>
        </span>

        <div class="width-max-proyect">

            <div class="galery-bento-grid">
                <div class="image1 slider-bento">
                    <img class="img-bento rounded-2" src="https://elabra.pe/wp-content/uploads/2023/06/Casa-Museo.jpg" alt="">
                </div>
                <div class="image2 slider-bento">
                    <img class="img-bento rounded-2" src="https://elabra.pe/wp-content/uploads/2023/06/Catarata-Rio-Tigre-.jpg" alt="">
                </div>
                <div class="image3 slider-bento">
                    <img class="img-bento rounded-2" src="https://elabra.pe/wp-content/uploads/2023/06/Manatial-de-la-Virgen.jpg" alt="">
                </div>
                <div class="image4 slider-bento">
                    <img class="img-bento rounded-2" src="https://elabra.pe/wp-content/uploads/2023/06/Plaza-de-Oxapampa.jpg" alt="">
                </div>
            </div>

        </div>

    </section>

    <!-- ver proyecto 3d -->
    <section class="container-xl py-5">
        <span>
            <h2 style="font-weight: 700;" class="color-green-2">Mira nuestro proyecto</h2>
            <p class="sub-title-section">Reserva de Biósfera</p>
            <p class="width-max-proyect">En el Condominio El Abra, mantenemos y cuidamos los lotes que vendemos, garantizando la calidad y valorización de su inversión. ¡Disfrute de su propiedad sin preocupaciones!</p>
        </span>
        <!-- image direction 3d -->
        <div class="width-max-proyect">
            <img class="img-fluid rounded-2" src="https://gruporobles.com.pe/storage/proyectos/valle-orquidea/iaCPh.jpg" alt="">
        </div>
    </section>
    <!-- CONTACT FORM -->
    <?php
    $class = "position-fixed bottom-0 end-0";
    include_once 'components/formulario.php';
    ?>

    <!-- footer -->
    <?php
    include_once 'footer.php';
    ?>
    <!-- modal slider -->
    <div id="container-modal-swiper" class="modal-swiper d-none-swiper container-xxl">
        <span class="position-absolute  end-close " id="close-modal"><i class="text-white fs-3 fa-regular fa-circle-xmark"></i></span>
        <div class="container-md mid-slider">
            <div class="swiper-modal">
                <div class="swiper-wrapper" id="modal-proyect-wrapper">
                </div>
                <div class="swiper-pagination text-white"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</body>
<script type="module" src="js/modalSlider.js"></script>
<script src="hiddenUrl.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs'

    const swiper = new Swiper(`.swiper-proyecto`, {
        // Optional parameters
        autoplay: {
            delay: 4000,
        },
        loop: true,
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    const swiper2 = new Swiper(".swiper-modal", {
        // Optional parameters
        autoplay: {
            delay: 4000,
        },
        spaceBetween: 30,
        loop: true,
        slidesPerView: 1,
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
<script src="js/modalHeaderEffect.js">
</script>
<script src="js/galery.js"></script>

<script src="https://www.youtube.com/iframe_api"></script>

</html>