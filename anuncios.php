<?php
    require 'includes/funciones.php';
    incluirTamplate('header');
    $limite = 10;
?>
    <main class="contenedor seccion">
        <h2>Casas y Departamentos en Venta</h2>
        <?php include 'includes/templates/anuncios.php';?>
    </main>
<?php
    incluirTamplate('footer');
?>