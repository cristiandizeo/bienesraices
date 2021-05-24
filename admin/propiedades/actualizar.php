<?php
//validar id url
$id = $_GET['idpropiedad'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /admin');
}

//bdd
require '../../includes/config/database.php';
$db = conectarDB();

//obtener datos de propiedad
$consulta = "SELECT * FROM propiedades WHERE idpropiedad = ${id}";
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);

//obtener selects
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

//arr msj error
$errores = [];

$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$wc = $propiedad['wc'];
$estacionamiento = $propiedad['estacionamiento'];
$idvendedor = $propiedad['idvendedor'];
$creado = $propiedad['creado'];
$imagenPropiedad = $propiedad['imagen'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";

    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $idvendedor = mysqli_real_escape_string($db, $_POST['idvendedor']);
    $creado = date('Y/m/d');

    // Asignar files hacia una variable
    $imagen = $_FILES['imagen'];

    if (!$titulo) {
        $errores[] = "* Añade un título";
    }
    if (!$precio) {
        $errores[] = "* Añade un precio";
    }
    if (strlen($descripcion) < 50) {
        $errores[] = "* La descripción debe tener al menos 50 caracteres";
    }
    if (!$habitaciones) {
        $errores[] = "* Añade el numero de habitaciones";
    }
    if (!$wc) {
        $errores[] = "* Añade el numero de baños";
    }
    if (!$estacionamiento) {
        $errores[] = "* Añade el numero de estacionamientos";
    }
    if (!$idvendedor) {
        $errores[] = "* Debes indicar el vendedor";
    }

    // Validar por tamaño (100kb)
    $medida = 300000;
    if ($imagen['size'] > $medida) {
        $errores[] = '* La imagen no puede superar los 100kb';
    }


    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";

    //revisar arr err
    if (empty($errores)) {
        // crear carpeta
        $carpetaImagenes = '../../imagenes/';

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        $nombreImagen = '';

        // SUBIDA DE ARCHIVOS
        if ($imagen['name']) {
            unlink($carpetaImagenes . $propiedad['imagen']);

            // generar nombre unico
            $nombreImagen = md5(uniqid(rand(), true))  . ".jpg";

            //subir imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
        } else {
            $nombreImagen = $propiedad['imagen'];
        }

        //actualizar bdd
        $query = "UPDATE propiedades SET titulo = '${titulo}', precio = '${precio}', imagen = '${nombreImagen}', descripcion = '${descripcion}', habitaciones = ${habitaciones}, wc = ${wc}, estacionamiento = ${estacionamiento}, idvendedor = ${idvendedor} WHERE idpropiedad = ${id}";
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('Location: /admin?resultado=2');
        }
        // if($resultado){
        //     echo "Insertado correctamente";
        // }else{
        //     echo "Error";
        // }
    }
}
require '../../includes/funciones.php';
incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>Actualizar</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Información general</legend>
            <label for="titulo">Título</label>
            <input type="text" id="titulo" value="<?php echo $titulo ?>" name="titulo" placeholder="Título de la propiedad">

            <label for="precio">Precio</label>
            <input type="number" id="precio" value="<?php echo $precio ?>" name="precio" placeholder="Precio de la propiedad">

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

            <img src="/imagenes/<?php echo $imagenPropiedad; ?>" class="img-small" alt="">

            <label for="descripcion">Descripción</label>
            <textarea type="text" id="descripcion" name="descripcion" placeholder="Descripción de la propiedad"><?php echo $descripcion ?></textarea>
        </fieldset>
        <fieldset>
            <legend>Información propiedad</legend>
            <label for="habitaciones">Habitaciones</label>
            <input type="number" id="habitaciones" value="<?php echo $habitaciones ?>" name="habitaciones" placeholder="Ej: 3" min="1" max="9">
            <label for="wc">Baños</label>
            <input type="number" id="wc" value="<?php echo $wc ?>" name="wc" placeholder="Ej: 3" min="1" max="9">
            <label for="estacionamiento">Estacionamiento</label>
            <input type="number" id="estacionamiento" value="<?php echo $estacionamiento ?>" name="estacionamiento" placeholder="Ej: 3" min="1" max="9">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select name="idvendedor">
                <option value=" " disabled selected>
                    <-Seleccione vendedor->
                </option>
                <?php while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                    <option <?php echo $idvendedor === $vendedor['idvendedor'] ? 'selected' : ''; ?> value="<?php echo $vendedor['idvendedor']; ?>"><?php echo $vendedor['apellido'] . ", " . $vendedor['nombre'] ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Actualizar" class="boton boton-verde">
    </form>
</main>

<?php incluirTemplate('footer'); ?>