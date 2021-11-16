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

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){
            //eliminar archivo
            $query = "SELECT * FROM propiedades WHERE ID = ${id}";
            $resultado = mysqli_query($db, $query);
            $propiedad = mysqli_fetch_assoc($resultado);
            unlink('../imagenes/'.$propiedad['imagen']);
            //elimina propiedad
            $query = "DELETE FROM propiedades WHERE id = ${id}";
            $resultado = mysqli_query($db, $query);
            //$resultado = true;

            if($resultado){
                header('Location: ../admin?resultado=3');
            }
        }
    }

?>

<main class="contenedor seccion">
    <h1>inicio admin</h1>
    <?php if($resultado == 1) :?>
        <p class="alerta exito">Anuncio Creado Correctamente</p>
    <?php elseif($resultado == 2) :?>
        <p class="alerta exito">Anuncio Actualizado Correctamente</p>
    <?php elseif($resultado == 3) :?>
        <p class="alerta exito">Anuncio Eliminado Correctamente</p>
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
                    <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $propiedad['id'];?>">
                        <input type="submit" class="boton-rojo w-100" value="Eliminar">
                    </form>

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