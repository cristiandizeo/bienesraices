<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('localhost', 'root', '', 'dbbienesraices');
    if(!$db){
        echo "ERROR AL CONECTARSE";
        exit;
    }

    return $db;
}