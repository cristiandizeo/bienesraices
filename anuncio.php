<?php

$idpropiedad = $_GET['idpropiedad'];
$idpropiedad = filter_var($idpropiedad, FILTER_VALIDATE_INT);

if (!$idpropiedad) {
    header('Location: /');
}

require 'includes/config/database.php';
$db = conectarDB();

$query = "SELECT * FROM propiedades WHERE idpropiedad = ${idpropiedad}";
$resultado = mysqli_query($db, $query);

if ($resultado->num_rows === 0) {
    header('Location: /');    
}
$propiedad = mysqli_fetch_assoc($resultado);

require 'includes/funciones.php';
incluirTemplate('header');

?>

<main class="contenedor seccion contenido-centrado">
    <h1><?php echo $propiedad['titulo'];?></h1>
    <picture>
        <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen propiedad">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">u$s <?php echo $propiedad['precio'];?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p><?php echo $propiedad['wc'];?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p><?php echo $propiedad['estacionamiento'];?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                <p><?php echo $propiedad['habitaciones'];?></p>
            </li>
        </ul>

        <p><?php echo $propiedad['descripcion'];?></p>
    </div>
</main>

<?php 
mysqli_close($db); 
incluirTemplate('footer'); ?>