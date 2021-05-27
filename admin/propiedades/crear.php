<?php
require '../../includes/funciones.php';
$auth = estaAutenticado();

// echo "<pre>";
// var_dump($_SESSION);
// echo "<pre>";

if (!$auth) {
    header('Location: /');
}


//bdd
require '../../includes/config/database.php';
$db = conectarDB();


//obtener selects
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

//arr msj error
$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$idvendedor = '';
$creado = '';

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
    if (!$imagen['name'] || $imagen['error']) {
        $errores[] = "* Debes subir una imagen";
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

        // SUBIDA DE ARCHIVOS
        // crear carpeta
        $carpetaImagenes = '../../imagenes/';

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }
        // generar nombre unico
        $nombreImagen = md5(uniqid(rand(), true))  . ".jpg";

        //subir imagen
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);

        //insertar bdd
        $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, idvendedor) VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$idvendedor')";
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('Location: /admin?resultado=1');
        }
        // if($resultado){
        //     echo "Insertado correctamente";
        // }else{
        //     echo "Error";
        // }
    }
}
incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Información general</legend>
            <label for="titulo">Título</label>
            <input type="text" id="titulo" value="<?php echo $titulo ?>" name="titulo" placeholder="Título de la propiedad">

            <label for="precio">Precio</label>
            <input type="number" id="precio" value="<?php echo $precio ?>" name="precio" placeholder="Precio de la propiedad">

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

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

        <input type="submit" value="Subir" class="boton boton-verde">
    </form>
</main>

<?php incluirTemplate('footer'); ?>