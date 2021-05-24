<?php
//importar conexion
require '../includes/config/database.php';
$db = conectarDB();

//escribir query
$query = "SELECT * FROM propiedades";

//consultar bdd
$resultadoConsulta = mysqli_query($db, $query);


//si no existe el valor le asigna null
$resultado = $_GET['resultado'] ?? null;

//incluye el template
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
      <tbody><!-- mostrar resultados -->
      <?php 
         while($propiedad = mysqli_fetch_assoc($resultadoConsulta)):
      ?>
         <tr>
            <td><?php echo $propiedad['idpropiedad']; ?></td>
            <td><?php echo $propiedad['titulo']; ?></td>
            <td><img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla" alt=""></td>
            <td>$ <?php echo $propiedad['precio']; ?></td>
            <td>
               <a href="#" class="boton-amarillo-block">Editar</a>
               <a href="#" class="boton-rojo-block">Eliminar</a>
            </td>
         </tr>
         <?php endwhile;?>
      </tbody>
   </table>


</main>

<?php
//cerrar la conexion
mysqli_close($db);

incluirTemplate('footer'); ?>