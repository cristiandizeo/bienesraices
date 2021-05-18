<?php
require 'includes/funciones.php';
incluirTemplate('header'); ?>

   <main class="contenedor seccion contenido-centrado">
       <h1>Casa de lujo en Lago
    </h1>
    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen propiedad">
    </picture>
    <p class="informacion-meta">Escrito el <span>20/10/2021</span> por <span>Juan</span></p>

    <div class="resumen-propiedad">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum nobis dolorem molestias fugit, quos est laudantium veritatis, dolore, quisquam neque iste corrupti ea officia voluptatem doloribus doloremque quo eveniet. Vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus debitis quas libero voluptates, esse dolorum nesciunt voluptatem repudiandae at delectus! Voluptas sint vero odio. Corrupti dolorem nihil modi voluptate excepturi.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque excepturi sit, architecto non error libero ex fugit placeat consequuntur magni, est id, totam nostrum tenetur a possimus earum perferendis pariatur.</p>
    </div>
   </main>

   <?php incluirTemplate('footer'); ?>