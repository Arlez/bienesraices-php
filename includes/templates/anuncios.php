<?php 
//importar conexion
$db = conectarDB();

//consultar
$query = "SELECT * FROM propiedades LIMIT ${limite}";

//obtener resultado
$resultado = mysqli_query($db, $query);

?>


    <div class="contenedor-anuncios">

        <?php 
            
            foreach($resultado as $anuncio):
        ?>
            <div class="anuncio">

                <img src="imagenes/<?php echo $anuncio['imagen']?>" alt="anuncio" loading="lazy">

                <div class="contenido-anuncio">
                    <h3><?php echo $anuncio['titulo'];?></h3>
                    <p><?php echo $anuncio['descripcion'];?></p>
                    <p class="precio">$<?php echo $anuncio['precio'];?></p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" alt="icono wc">
                            <p><?php echo $anuncio['wc'];?></p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p><?php echo $anuncio['estacionamiento'];?></p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorios">
                            <p><?php echo $anuncio['habitaciones'];?></p>
                        </li>
                    </ul>

                    <a href="anuncio.php?id=<?php echo $anuncio['id'];?>" class="boton-amarillo d-block">Ver Propiedad</a>
                </div>
            </div><!--.anuncio contendio-->

        <?php endforeach;?>

    </div><!--anuncios-->

<?php 
//cerrar la conexion
mysqli_close($db);
?>