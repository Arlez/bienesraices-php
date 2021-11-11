<?php
    require '../../includes/config/db.php';
    $db = conectarDB();

    //arreglo con errores
    $errores = [];

    //enviar datos del formulario a la BD
    if( $_SERVER['REQUEST_METHOD'] === 'POST'){

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorId = $_POST['vendedor'];

        //validacion de los campos
        if(!$titulo){$errores[] = 'Debes insertar un Titulo';}
        if(!$precio){$errores[] = 'Debes insertar un Precio';}
        if(strlen($descripcion)<50){$errores[] = 'Debes insertar una Descripcion y esta debe tener al menos 50 caracteres';}
        if(!$habitaciones){$errores[] = 'Debes insertar al menos una Habitacion';}
        if(!$wc){$errores[] = 'Debes insertar al menos un WC';}
        if(!$estacionamiento){$errores[] = 'Debes insertar al menos un Estacionamiento';}
        if(!$vendedorId|| $vendedorId === 0){$errores[] = 'Debes seleccionar un Vendedor';}
        

        //echo '<pre>';
        //var_dump($errores);
        //echo '</pre>';

        //revisar que el arreglo $errores esta vacia
        if(empty($errores)){
        //insertar en BD
            $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId)";
            $query.= "VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId')";

            $resultado = mysqli_query($db, $query);

            if($resultado){
                echo 'Datos insertados correctamente';
            }else{
                echo 'Hubo un error';
            }
        }
    }

    require '../../includes/funciones.php';
    incluirTamplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/bienesraices/admin" class="boton boton-verde">Volver</a>

    <?php foreach($errores as $error){?>
        <div class="alerta error">
            <?php echo $error;?>
        </div>
    <?php } ?>

    <form action="crear.php" class="formulario" method="POST">
        <fieldset>
            <legend>Información General</legend>

            <label for="titulo"> Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Porpiedad">

            <label for="precio"> Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio Porpiedad">

            <label for="imagen"> Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion"> Descripción:</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
        </fieldset>

        <fieldset>
            <legend>
                Información Propiedad
            </legend>

            <label for="habitaciones"> Habitaciónes:</label>
            <input type="number" id="habitaciones" name="habitaciones" min=1 max=5 placeholder="0">

            <label for="wc"> Baños:</label>
            <input type="number" id="wc" name="wc" min=1 max=5 placeholder="0">

            <label for="estacionamiento"> Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" min=1 max=5 placeholder="0">
        </fieldset>

        <fieldset>
            <legend>
                Vendedor
            </legend>

            <select name="vendedor" id="vendedor">
                <option value="">--Selecciona Vendedor-</option>
                <option value="1">Daniel</option>
                <option value="2">Alonso</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<?php
    incluirTamplate('footer');
?>