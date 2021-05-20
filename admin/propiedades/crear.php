<?php
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
$vendedorId = '';
$creado = '';

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
$vendedorId = $_POST['idvendedor'];
$creado = date('Y/m/d');

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
$query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, idvendedor) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";
$resultado = mysqli_query($db, $query);

if($resultado){
    header('Location: /admin');
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
            <select name="idvendedor">
                <option value="" disabled selected><-Seleccione vendedor-></option>
<?php while($vendedor = mysqli_fetch_assoc($resultado)) : ?>
    <option <?php echo $vendedorId === $vendedor['idvendedor'] ? 'selected': ''; ?> value="<?php echo $vendedor['idvendedor']; ?>"><?php echo $vendedor['apellido'] . ", " . $vendedor['nombre']?></option>
<?php endwhile;?>
            </select>
        </fieldset>

        <input type="submit" value="Subir" class="boton boton-verde">
    </form>
</main>

<?php incluirTemplate('footer'); ?>