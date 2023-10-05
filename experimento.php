<article class="container-xxl container-xl py-4">
        <div class="row row-cols-2">

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


            <div class="d-flex flex-column gap-5">
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
            <div class="row row-cols-4 g-5">
                <?php
                $cardClass = "flex-column";
                for ($i = 0; $i < 8; $i++) {
                    include 'components/cardBlogs.php';
                }
                ?>
            </div>
        </section>

    </article>