<?php

    if (!isset($_SESSION)) {
    session_start();
    }

    $auth = $_SESSION['login'] ?? false;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes raíces</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">

                <a href="/"><img src="/build/img/logo.svg" alt="Bienes raices"></a>
                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsive">
                </div>
                <div class="derecha">
                    <img src="/build/img/dark-mode.svg" alt="Dark mode" class="dark-mode-boton">
                <nav class="navegacion">
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                    <?php if($auth) : ?>
                    <a href="cerrar-sesion.php">Cerrar sesión</a>
                        <?php endif ?>
                </nav>
            </div>
        </div>
    <?php 
        echo $inicio ? "<h2>Casas y departamentos en venta</h2>" : "";
    ?>
        </div>
    </header>