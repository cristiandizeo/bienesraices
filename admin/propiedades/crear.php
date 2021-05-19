<?php
//bdd
require '../../includes/config/database.php';
$db = conectarDB();

//arr msj error
$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedorId = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

$titulo = $_POST['titulo'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$habitaciones = $_POST['habitaciones'];
$wc = $_POST['wc'];
$estacionamiento = $_POST['estacionamiento'];
$vendedorId = $_POST['vendedor'];

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
if (!$vendedorId) {
    $errores[] = "* Debes indicar el vendedor";
}

// echo "<pre>";
// var_dump($errores);
// echo "</pre>";

//revisar arr err
if(empty($errores)){

//insertar bdd
$query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId')";
$resultado = mysqli_query($db, $query);

if($resultado){
    echo "Insertado correctamente";
}
}

}
require '../../includes/funciones.php';
incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>
    
    <?php foreach($errores as $error):?>
        <div class="alerta error">
        <?php echo $error; ?>
        </div>
    <?php endforeach;?>
    <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Información general</legend>
            <label for="titulo">Título</label>
            <input type="text" id="titulo" value="<?php echo $titulo ?>" name="titulo" placeholder="Título de la propiedad">

            <label for="precio">Precio</label>
            <input type="number" id="precio" value="<?php echo $precio ?>" name="precio" placeholder="Precio de la propiedad">

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" value="<?php echo $imagen ?>" name="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción</label>
            <textarea type="text" id="descripcion" name="descripcion" placeholder="Descripción de la propiedad"><?php echo $descripcion ?></textarea>
        </fieldset>
        <fieldset>
            <legend>Información propiedad</legend>
            <label for="habitaciones">Habitaciones</label>
            <input type="number" id="habitaciones" value="<?php echo $habitaciones ?>" name="habitaciones" placeholder="Ej: 3" min="1" max="9">
            <label for="wc">Baños</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9">
            <label for="estacionamiento">Estacionamiento</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor">
                <option value="" disabled selected><-Seleccione vendedor-></option>
                <option value="1">Juan</option>
                <option value="2">Karen</option>
            </select>
        </fieldset>

        <input type="submit" value="Subir" class="boton boton-verde">
    </form>
</main>

<?php incluirTemplate('footer'); ?>