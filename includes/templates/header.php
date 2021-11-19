<?php
    if(!isset($_SESSION)){session_start();}
    $auth = $_SESSION['login'] ?? false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bienesraices/build/css/app.css">
    <title>Bienes Raices</title>
</head>
<body>
    
    <header class="header <?php echo $inicio ? 'inicio' : '' ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/bienesraices">
                    <img src="/bienesraices/build/img/logo.svg" alt="imagen logo">
                </a>

                <div class="mobile-menu">
                    <img src="/bienesraices/build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img src="/bienesraices/build/img/dark-mode.svg" class="dark-mode-boton" alt="dark mode">
                    <nav class="navegacion mostrar">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                        <?php if($auth): ?>
                            <a href="/bienesraices/cerrar-sesion.php">Cerrar Sesión</a>
                        <?php endif; ?>
                    </nav>
                </div>
            </div><!--.barra-->
            <?php echo $inicio ? '<h3 class="titulo">Venta de Casas y Departamentos de Lujos</h3>' : '' ?>
        </div>
    </header><!--.header-->