<?php

define('TEMPLATES_URL', __DIR__.'/templates');
define('FUNCIONES_URL', __DIR__.'funciones.php');

function incluirTamplate(string $nombre, bool $inicio = false){
    include TEMPLATES_URL."/${nombre}.php";
}

function autenticar(){
    session_start();
    if($_SESSION['login'] === false){
        header('Location: /bienesraices/login.php');
    }
}

function debuguear($variable){
    
    echo "<pre>";
    var_dump($variable);
    echo"</pre>";

    exit;
}