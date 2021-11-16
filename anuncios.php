<?php
    require 'includes/funciones.php';
    incluirTamplate('header');
?>
    <main class="contenedor seccion">
        <h2>Casas y Departamentos en Venta</h2>
        <?php include 'includes/templates/anuncios.php'; $limite = 10;?>
    </main>
<?php
    incluirTamplate('footer');
?>