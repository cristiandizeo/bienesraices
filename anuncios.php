<?php
require 'includes/funciones.php';
incluirTemplate('header'); ?>


<main class="contenedor seccion">
<h2>Casas y departamentos en venta</h2>
<?php 
   $limite = 9;
   include 'includes/templates/anuncios.php'; ?>
</main>


<?php incluirTemplate('footer'); ?>