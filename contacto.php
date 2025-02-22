<?php
require 'includes/funciones.php';
incluirTemplate('header'); ?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">

        </picture>
            <h2>Complete el formulario de contacto</h2>
            <form class="formulario">
                <fieldset>
                    <legend>Información persona</legend>
                    <label for="nombre">Nombre</label>
                    <input type="text" placeholder="Tu nombre" name="nombre" id="nombre">

                    <label for="email">Email</label>
                    <input type="text" placeholder="Tu email" name="email" id="email">

                    <label for="telefono">Telefono</label>
                    <input type="text" placeholder="Tu telefono" name="telefono" id="telefono">

                    <label for="mensaje">Mensaje</label>
                    <textarea placeholder="Tu mensaje" id="mensaje">
             </textarea>
                </fieldset>
                <fieldset>
                    <legend>Información sobre la propiedad</legend>

                    <label for="opciones">Vende o compra</label>
                    <select name="opciones" id="opciones">
                        <option value="" disabled selected>Seleccione una</option>
                        <option value="Compra">Compra</option>
                        <option value="Vende">Vende</option>
                    </select>

                    <label for="presupuesto">Presupuesto</label>
                    <input type="number" placeholder="Presupuesto" name="presupuesto" id="presupuesto">
                </fieldset>
                <fieldset>
                    <legend>Información sobre la propiedad</legend>

                    <p>¿Cómo desea ser contactado?</p>
                    <div class="forma-contacto">
                        <label for="contactar-telefono">Teléfono</label>
                        <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                        
                        <label for="contactar-email">Email</label>                
                        <input name="contacto" type="radio" value="email" id="contactar-email">
                    </div>

                    <p>Si eligió teléfono, indique en qué fecha y horario desea ser contactado</p>
                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha">

                    <label for="hora">Hora</label>
                    <input type="time" id="hora" min="09:00" max="18:00">

                </fieldset>
                <input type="submit" name="enviar" id="enviar" value="Enviar" class="boton-verde">
            </form>
    </main>
   <?php incluirTemplate('footer'); ?>