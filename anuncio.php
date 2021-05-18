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

    <div class="resumen-propiedad">
        <p class="precio">u$s 100.000</p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>2</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p>1</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                <p>3</p>
            </li>
        </ul>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum nobis dolorem molestias fugit, quos est laudantium veritatis, dolore, quisquam neque iste corrupti ea officia voluptatem doloribus doloremque quo eveniet. Vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus debitis quas libero voluptates, esse dolorum nesciunt voluptatem repudiandae at delectus! Voluptas sint vero odio. Corrupti dolorem nihil modi voluptate excepturi.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque excepturi sit, architecto non error libero ex fugit placeat consequuntur magni, est id, totam nostrum tenetur a possimus earum perferendis pariatur.</p>
    </div>
   </main>

   <?php incluirTemplate('footer'); ?>