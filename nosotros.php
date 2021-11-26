<?php
    require 'includes/app.php';
    incluirTamplate('header');
?>

    <main class="contenedor seccion">
        <h2>Conoce sobre Nosotros</h2>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="nosotros" loading="lazy">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, adipisci harum magnam sequi iusto assumenda odio cum? Est, officia totam expedita fugiat, accusantium ut temporibus iusto veritatis neque rem placeat delectus ab mollitia nemo porro. Eius dolorum beatae quae in, hic quisquam aspernatur similique! Sed eos ea vel numquam placeat?
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem dignissimos cupiditate delectus dolor asperiores! Quisquam distinctio et doloribus, repudiandae, quos qui ipsum corrupti quod quas, voluptas est ipsa? Alias quis repellat asperiores iusto minima ut doloribus nam, perferendis pariatur libero dolore distinctio officiis fugit minus sapiente ratione delectus itaque hic ad a necessitatibus nobis quasi dolores quia. Illum veritatis incidunt illo voluptatem architecto ea vitae, tempora deserunt, dolorum minima quis!
                </p>
            </div>
        </div>
    </main>


    <section class="contenedor seccion">
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
    </section><!--.main-->

<?php
    incluirTamplate('footer');
?>