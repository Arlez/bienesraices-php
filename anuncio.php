<?php
    require 'includes/app.php';
    incluirTamplate('header');

    //obtener el id por url
    $id = $_GET['id'] ?? null;
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header('Location: /bienesraices');
    }

    //conexion BD
    $db = conectarDB();

    //consulta
    $query = "SELECT * FROM propiedades WHERE id = ${id}";
    $resultado = mysqli_query($db, $query);

    if(!$resultado->num_rows){
        header('Location: /bienesraices');
    }

    $anuncio = mysqli_fetch_assoc($resultado);
?>

    <main class="contenedor seccion contenido-centrado">
        <h2><?php echo $anuncio['titulo'];?></h2>

        <img src="imagenes/<?php echo $anuncio['imagen'];?>" alt="imagen destacada" loading="lazy">
       
        <div class="resumen-propiedad">
            <p class="precio">$<?php echo $anuncio['precio'];?></p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?php echo $anuncio['wc'];?></p>
                </li>
                <li>
                    <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?php echo $anuncio['estacionamiento'];?></p>
                </li>
                <li>
                    <img src="build/img/icono_dormitorio.svg" alt="icono dormitorios">
                    <p><?php echo $anuncio['habitaciones'];?></p>
                </li>
            </ul>

            <p><?php echo $anuncio['descripcion'];?></p>
        </div>
    </main>

<?php
    mysqli_close($db);
    incluirTamplate('footer');
?>