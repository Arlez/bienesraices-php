<?php
    //importar conexion
    require_once '../includes/config/db.php';
    $db = conectarDB();

    //query
    $query = "SELECT * FROM propiedades";

    //consultar BD
    $consulta = mysqli_query($db, $query);

    require '../includes/funciones.php';
    incluirTamplate('header');

    $resultado = $_GET['resultado'] ?? null;

?>

<main class="contenedor seccion">
    <h1>inicio admin</h1>
    <?php if($resultado == 1) :?>
        <p class="alerta exito">Anuncio creado correctamente</p>
    <?php endif;?>

    <a href="propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($consulta as $propiedad):?>
            <tr>
                <td><?php echo $propiedad['id']; ?></td>
                <td><?php echo $propiedad['titulo']; ?></td>
                <td> <img src="../imagenes/<?php echo $propiedad['imagen']; ?>" alt="" class="imagen-tabla"> </td>
                <td> $<?php echo $propiedad['precio']; ?></td>
                <td>
                    <a href="#" class="boton-rojo d-block">Eliminar</a>
                    <a href="propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo d-block">Actualizar</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

</main>

<?php
    mysqli_close($db);
    incluirTamplate('footer');
?>