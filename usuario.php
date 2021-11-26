<?php
//importar conexion
require 'includes/app.php';
$db = conectarDB();

//crear email y password
$email = "correo@correo.com";
$password = "1234";
//hashear password
$passwordHashe = password_hash($password, PASSWORD_DEFAULT);

//query para crear usuario
$query = "INSERT INTO usuarios (email, password) VALUES ('${email}','${passwordHashe}')";

//agregarlo a BD
mysqli_query($db, $query);

//cerrar conexion
mysqli_close($db);
?>