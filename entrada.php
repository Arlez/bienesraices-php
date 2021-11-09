<?php
    require 'includes/funciones.php';
    incluirTamplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h2>Guía para la decoración de tu hogar</h2>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img src="build/img/destacada2.jpg" alt="imagen destacada" loading="lazy">
        </picture> 
        
        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsam natus nulla molestiae consequatur, earum non. Magni maxime omnis impedit. Labore iusto voluptatem vero quis qui minus autem hic est error id, enim illo voluptate culpa distinctio neque delectus earum harum. Veniam sed commodi, tempore earum explicabo aperiam quae repudiandae possimus accusamus corporis illum dolorem aut itaque eveniet exercitationem voluptas! Possimus aperiam laborum nulla quasi optio eveniet, hic numquam quod veritatis quaerat laudantium adipisci nesciunt, nihil aut deleniti consequuntur. Porro atque enim, quam perferendis voluptate est totam cumque eaque vel debitis, doloremque ullam tempora aspernatur aut neque in quaerat voluptatum.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, repudiandae, neque officia maxime blanditiis pariatur nobis veritatis enim tempora, laudantium ipsam! Omnis eveniet nemo, ipsam exercitationem nostrum tempora et commodi.</p>
        </div>
    </main>

<?php
    incluirTamplate('footer');
?>