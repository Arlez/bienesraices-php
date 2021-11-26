<?php
    require '../../includes/app.php'; 

    use App\Propiedad;

    //autenticar usuario
    autenticar();
  

    $db = conectarDB();

    //llamar vendedores desde BD
    $query_vendedores = "SELECT * FROM vendedores";
    $resultado_vendedores = mysqli_query($db, $query_vendedores);

    //arreglo con errores
    $errores = [];

    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedorId = '';

    //enviar datos del formulario a la BD
    if( $_SERVER['REQUEST_METHOD'] === 'POST'){

        $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
        $precio = mysqli_real_escape_string($db, $_POST['precio']);
        $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
        $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
        $wc = mysqli_real_escape_string($db, $_POST['wc']);
        $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
        $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);
        $creado = date('Y/m/d');
        $imagen = $_FILES['imagen']['name'];

        //validacion de los campos
        if(!$titulo){$errores[] = 'Debes insertar un Titulo';}
        if(!$precio){$errores[] = 'Debes insertar un Precio';}
        if(strlen($descripcion)<50){$errores[] = 'Debes insertar una Descripcion y esta debe tener al menos 50 caracteres';}
        if(!$habitaciones){$errores[] = 'Debes insertar al menos una Habitacion';}
        if(!$wc){$errores[] = 'Debes insertar al menos un WC';}
        if(!$estacionamiento){$errores[] = 'Debes insertar al menos un Estacionamiento';}
        if(!$vendedorId|| $vendedorId === 0){$errores[] = 'Debes seleccionar un Vendedor';}
        if(!$imagen || $_FILES['imagen']['error']){$errores[] = 'Debes insertar una imagen';}

        //validar tamaño de imagenes
        $medida = 1000 * 1000;
        if($_FILES['imagen']['size']>$medida){$errores[] = 'La imagen es muy grande';}
    
        //echo '<pre>';
        //var_dump($errores);
        //echo '</pre>';
        //revisar que el arreglo $errores esta vacia
        if(empty($errores)){
            //sabida de archivos

            //crear carpeta
            $carpetaImagenes = '../../imagenes';
            if(!is_dir($carpetaImagenes)){mkdir($carpetaImagenes);}

            //generar nombre unico
            $nombreImagen = md5(uniqid(rand(),true)).'.jpg';

            move_uploaded_file($_FILES['imagen']['tmp_name'], $carpetaImagenes.'/'.$nombreImagen);

            //query para insertar datos en la BD
            $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId)";
            $query.= "VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";
    
            //insertar en BD
            $resultado = mysqli_query($db, $query);
            //$resultado = true;
            echo $resultado ? header('Location: ../../admin?resultado=1') : 'Hubo un error';  
        }
    }

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

    <form action="crear.php" class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>

            <label for="titulo"> Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Porpiedad" value="<?php echo $titulo;?>">

            <label for="precio"> Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio Porpiedad" value="<?php echo $precio;?>">

            <label for="imagen"> Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="descripcion"> Descripción:</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"> <?php echo $descripcion;?></textarea>
        </fieldset>

        <fieldset>
            <legend>
                Información Propiedad
            </legend>

            <label for="habitaciones"> Habitaciónes:</label>
            <input type="number" id="habitaciones" name="habitaciones" min=1 max=5 placeholder="0"  value="<?php echo $habitaciones;?>">

            <label for="wc"> Baños:</label>
            <input type="number" id="wc" name="wc" min=1 max=5 placeholder="0"  value="<?php echo $wc;?>">

            <label for="estacionamiento"> Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" min=1 max=5 placeholder="0"  value="<?php echo $estacionamiento;?>">
        </fieldset>

        <fieldset>
            <legend>
                Vendedor
            </legend>

            <select name="vendedor" id="vendedor">
                <option value="">--Selecciona Vendedor-</option>
                <?php foreach($resultado_vendedores as $vendedores):?>
                    <option <?php if($vendedorId === $vendedores['id']){echo 'selected';} ?> value="<?php echo $vendedores['id']?>"><?php echo $vendedores['nombre'].' '.$vendedores['apellido']?></option>
                <?php endforeach;?>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<?php
    incluirTamplate('footer');
?>