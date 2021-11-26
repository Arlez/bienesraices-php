<?php
    require 'includes/app.php';
    incluirTamplate('header',true);
?>

    <main class="contenedor seccion">
        <h2>Más Sobre Nosotros</h2>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis sit impedit dolore omnis tenetur dignissimos ratione! Impedit fugit, deserunt optio maxime cumque vitae sapiente! Nam?</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis sit impedit dolore omnis tenetur dignissimos ratione! Impedit fugit, deserunt optio maxime cumque vitae sapiente! Nam?</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis sit impedit dolore omnis tenetur dignissimos ratione! Impedit fugit, deserunt optio maxime cumque vitae sapiente! Nam?</p>
            </div>
        </div>
    </main><!--.main-->


    <section class="seccion contenedor">
        <h2>Casas y Departamentos en Venta</h2>

        <!--anuncios-->
        <?php $limite = 3; include 'includes/templates/anuncios.php'; ?>

        <div class="alinear-derecha"> 
            <a href="anuncios.html" class="boton-verde">Ver Todas </a>
        </div>

    </section><!--.seccion-->

    <section class="imagen-contacto">
        <h2>Encuentra la Casa de tur sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad.</p>
        <a href="contacto.html" class="boton-amarillo">Contactános</a>
    </section><!--.imagen contacto-->


    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp"> 
                        <source srcset="build/img/blog1.jpg" type="image/jpeg"> 
                        <img src="build/img/blog1.jpg" alt="texto entrada blog" loading="lazy">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                    </a>
                </div>
            </article><!--.entrada-blog-->

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp"> 
                        <source srcset="build/img/blog2.jpg" type="image/jpeg"> 
                        <img src="build/img/blog2.jpg" alt="texto entrada blog" loading="lazy">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guía para la decoracíon sw ru hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio</p>
                    </a>
                </div>
            </article><!--.entrada-blog-->
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- Daniel Barrera</p>
            </div>
        </section>
    </div><!--.blog-->



<?php
    incluirTamplate('footer');
?>