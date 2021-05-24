<?php
//si no existe el valor le asigna null
$resultado = $_GET['resultado'] ?? null;

require '../includes/funciones.php';
incluirTemplate('header'); ?>

<main class="contenedor seccion">
   <h1>Administrador de bienes raíces</h1>
   <?php
   if (intval($resultado) === 1) :
   ?>
      <p class="alerta exito">Anuncio creado correctamente</p>
   <?php
   endif;
   ?>
   <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>

   <table class="propiedades">
      <thead>
         <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Acciones</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>1</td>
            <td>Casa en la playa</td>
            <td><img src="/imagenes/978b708ac1b25e39f02849bf6da05c14.jpg" class="imagen-tabla" alt=""></td>
            <td>$200000</td>
            <td>
               <a href="#" class="boton-amarillo-block">Editar</a>
               <a href="#" class="boton-rojo-block">Eliminar</a>
            </td>
         </tr>
      </tbody>
   </table>


</main>

<?php incluirTemplate('footer'); ?>