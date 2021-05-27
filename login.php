<?php
require 'includes/config/database.php';
$db = conectarDB();

$errores = [];
//Autenticar
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores[] = "El email es obligatorio";
    }
    if (!$password) {
        $errores[] = "La contraseña es obligatoria";
    }

    if (empty($errores)) {
        $query = "SELECT * FROM usuarios WHERE email = '${email}'";
        $resultado = mysqli_query($db, $query);
        if ($resultado->num_rows) {

        }else{
            $errores[] = "* El usuario no existe";
        }
    }
}

require 'includes/funciones.php';
incluirTemplate('header'); ?>

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar sesión</h1>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form method="POST" class="formulario">
        <fieldset>
            <legend>Información persona</legend>
            <label for="email">Email</label>
            <input type="email" placeholder="Tu email" name="email" id="email" required>

            <label for="password">Contraseña</label>
            <input type="password" placeholder="Tu contraseña" name="password" id="password" required>
            <input type="submit" value="Iniciar sesión" class="boton boton-verde">
            </textarea>
        </fieldset>
    </form>
</main>

<?php incluirTemplate('footer'); ?>