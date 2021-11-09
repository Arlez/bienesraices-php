<?php
    require 'includes/funciones.php';
    incluirTamplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h2>Casa en venta frente al bosque</h2>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img src="build/img/destacada.jpg" alt="imagen destacada" loading="lazy">
        </picture> 

        <div class="resumen-propiedad">
            <p class="precio">$60.000.000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img src="build/img/icono_dormitorio.svg" alt="icono dormitorios">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsam natus nulla molestiae consequatur, earum non. Magni maxime omnis impedit. Labore iusto voluptatem vero quis qui minus autem hic est error id, enim illo voluptate culpa distinctio neque delectus earum harum. Veniam sed commodi, tempore earum explicabo aperiam quae repudiandae possimus accusamus corporis illum dolorem aut itaque eveniet exercitationem voluptas! Possimus aperiam laborum nulla quasi optio eveniet, hic numquam quod veritatis quaerat laudantium adipisci nesciunt, nihil aut deleniti consequuntur. Porro atque enim, quam perferendis voluptate est totam cumque eaque vel debitis, doloremque ullam tempora aspernatur aut neque in quaerat voluptatum.</p>
        </div>
    </main>

<?php
    incluirTamplate('footer');
?>