<?php
    //conexion BD
    require 'includes/app.php';
    $db = conectarDB();

    $errores = [];
    //autenticar usuario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(!$email){
            $errores[] = "El email es obligatorio o no es valido";
        }
        if(!$password){
            $errores[] = "El password es obligatorio o no es valido";
        }
        if(empty($errores)){
            //revisar si el usuario existe
            $query = "SELECT * FROM usuarios WHERE email = '${email}'";
            $result = mysqli_query($db, $query);
            //comprobar que el usuario existe
            if($result->num_rows){
                $usuario = mysqli_fetch_assoc($result);
                //verificar si el password es correcto
                $auth = password_verify($password, $usuario['password']);

                if($auth){
                    //usuario autenticado
                    session_start();

                    //llenar el arreglo de la session
                    $_SESSION['usuario'] = $usuario['email']; 
                    $_SESSION['login'] = true;

                    header('Location: /bienesraices/admin');

                }else{
                    $errores[] = "El password es incorrecto";
                }

            }else{
                $errores[] = "El usuario no existe";
            }
        }
    }
    
    incluirTamplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h2>Iniciar Sessión</h2>
        <?php foreach($errores as $error):?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach;?>
        <form method="POST" class="formulario">
            <fieldset>
                <legend>Ingresa tus datos</legend>

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu E-mail" id="email" name="email" required>

                <label for="password">Contraseña</label>
                <input type="password" placeholder="*****" id="password" name="password" required>
            </fieldset>
            <input type="submit" value="Ingresar" class="boton-verde">
        </form>
    </main>
 
<?php
    incluirTamplate('footer');
?>