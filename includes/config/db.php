<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('localhost', 'root' , '','bienes_raices');

    if(!$db){
        echo 'No se pudo conactar';
        exit;
    }
    return $db;
}
