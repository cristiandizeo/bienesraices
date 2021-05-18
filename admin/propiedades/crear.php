<?php
require '../../includes/config/database.php';
$db = conectarDB();

require '../../includes/funciones.php';
incluirTemplate('header'); ?>

   <main class="contenedor seccion">
       <h1>Crear</h1>

       <a href="/admin" class="boton boton-verde">Volver</a>
        <form class="formulario">
            <fieldset>
                <legend>Información general</legend>
                <label for="titulo">Título</label>
                <input type="text" id="titulo" placeholder="Título de la propiedad">
                
                <label for="precio">Precio</label>
                <input type="number" id="precio" placeholder="Precio de la propiedad">
                
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">
                
                <label for="descripcion">Descripción</label>
                <textarea type="text" id="descripcion" placeholder="Descripción de la propiedad"></textarea>
            </fieldset>
            <fieldset>
                <legend>Información propiedad</legend>
                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" placeholder="Ej: 3" min="1" max="9">
                <label for="baños">Baños</label>
                <input type="number" id="baños" placeholder="Ej: 3" min="1" max="9">
                <label for="estacionamiento">Estacionamiento</label>
                <input type="number" id="estacionamiento" placeholder="Ej: 3" min="1" max="9">
            </fieldset>
            <fieldset>
                <legend>Vendedor</legend>
                <select>
                    <option value="1">Juan</option>
                    <option value="2">Karen</option>
                </select>
            </fieldset>

            <input type="submit" value="Subir" class="boton boton-verde">
        </form>
   </main>

   <?php incluirTemplate('footer'); ?>