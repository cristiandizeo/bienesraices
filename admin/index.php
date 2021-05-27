<?php
session_start();

// echo "<pre>";
// var_dump($_SESSION);
// echo "<pre>";

$auth = $_SESSION['login'];

if (!$auth) {
header('Location: /');
}
//importar conexion
require '../includes/config/database.php';
$db = conectarDB();

//escribir query
$query = "SELECT * FROM propiedades";

//consultar bdd
$resultadoConsulta = mysqli_query($db, $query);


//si no existe el valor le asigna null
$resultado = $_GET['resultado'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $idpropiedad = $_POST['idpropiedad'];
   $idpropiedad = filter_var($idpropiedad, FILTER_VALIDATE_INT);

   if ($idpropiedad) {
      $query = "SELECT imagen FROM propiedades WHERE idpropiedad = ${idpropiedad}";

      $resultado = mysqli_query($db, $query);
      $propiedad = mysqli_fetch_assoc($resultado);

      unlink('../imagenes/' . $propiedad['imagen']);

      $query = "DELETE FROM propiedades WHERE idpropiedad = ${idpropiedad}";

      $resultado = mysqli_query($db, $query);
      if ($resultado) {
         header('location: /admin?resultado=3');
      }
      echo $query;
   }
   var_dump($idpropiedad);
}

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
   elseif (intval($resultado) === 2) :
   ?>
      <p class="alerta exito">Anuncio actualizado correctamente</p> <?php
                                                                  elseif (intval($resultado) === 3) :
                                                                     ?>
      <p class="alerta exito">Anuncio eliminado correctamente</p>
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
         <!-- mostrar resultados -->
         <?php
         while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)) :
         ?>
            <tr>
               <td><?php echo $propiedad['idpropiedad']; ?></td>
               <td><?php echo $propiedad['titulo']; ?></td>
               <td><img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla" alt=""></td>
               <td>$ <?php echo $propiedad['precio']; ?></td>
               <td>
                  <form action="#" method="POST" class="w-100">
                     <input type="hidden" name="idpropiedad" value="<?php echo $propiedad['idpropiedad']; ?>">
                     <input type="submit" value="Eliminar" class="boton-rojo-block">
                  </form>
                  <a href="propiedades/actualizar.php?idpropiedad=<?php echo $propiedad['idpropiedad']; ?>" class="boton-amarillo-block">Editar</a>
               </td>
            </tr>
         <?php endwhile; ?>
      </tbody>
   </table>


</main>

<?php
//cerrar la conexion
mysqli_close($db);

incluirTemplate('footer'); ?>