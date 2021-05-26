<?php
require 'includes/funciones.php';
incluirTemplate('header'); ?>

   <main class="contenedor seccion contenido-centrado">
       <h1>Iniciar sesión</h1>

       <form class="formulario">
       <fieldset>
                    <legend>Información persona</legend>
                    <label for="email">Email</label>
                    <input type="text" placeholder="Tu email" name="email" id="email">

                    <label for="password">Contraseña</label>
                    <input type="password" placeholder="Tu contraseña" name="password" id="password">
        <input type="submit" value="Iniciar sesión" class="boton boton-verde">  
           </textarea>
                </fieldset>
       </form>
   </main>

   <?php incluirTemplate('footer'); ?>