<?php 
$inicio = true;
include 'includes/templates/header.php'; ?>

    <main class="contenedor seccion">
        <h1>Más sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ex laborum, cumque veniam quos
                    fuga quis delectus necessitatibus dignissimos nostrum? Ipsa molestiae quod corrupti ipsum illum
                    magni accusamus, tempora minus?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono seguridad" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ex laborum, cumque veniam quos
                    fuga quis delectus necessitatibus dignissimos nostrum? Ipsa molestiae quod corrupti ipsum illum
                    magni accusamus, tempora minus?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono seguridad" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ex laborum, cumque veniam quos
                    fuga quis delectus necessitatibus dignissimos nostrum? Ipsa molestiae quod corrupti ipsum illum
                    magni accusamus, tempora minus?</p>
            </div>
        </div>
    </main>
    <section class="seccion contenedor">
        <h2>Casas y departamentos en venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <!-- anuncio 1 -->
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa de lujo en Lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo, excelente precio</p>
                    <p class="precio">u$s 100.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>2</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>1</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                            <p>3</p>
                        </li>
                    </ul>
                    <a href="anuncio.php" class="boton-verde">
                        Ver propiedad
                    </a>
                </div>
            </div>
            <div class="anuncio">
                <!-- anuncio 2 -->
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa en Barcelona</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo, excelente precio</p>
                    <p class="precio">u$s 100.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>2</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>1</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                            <p>3</p>
                        </li>
                    </ul>
                    <a href="anuncio.php" class="boton-verde">
                        Ver propiedad
                    </a>
                </div>
            </div>
            <div class="anuncio">
                <!-- anuncio 3 -->
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa en Río de Janeiro</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo, excelente precio</p>
                    <p class="precio">u$s 100.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>2</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>1</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                            <p>3</p>
                        </li>
                    </ul>
                    <a href="anuncio.php" class="boton-verde">
                        Ver propiedad
                    </a>
                </div>
            </div>
        </div>

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver todas</a>
        </div>
    </section>
    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Completa el formulario y envíanos un mensaje</p>
        <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">

        <section class="blog">
            <h3>Nuestro blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpeg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpeg" alt="Texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el <span>20/10/2021</span> por <span>Juan</span></p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla impedit molestiae amet in
                            doloremque inventore perferendis quos. Aperiam pariatur veniam quis sed quibusdam temporibus
                            placeat, voluptate magnam, voluptates fuga dolorem?</p>
                    </a>
                </div>

            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpeg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpeg" alt="Texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Decoracion de interiores</h4>
                        <p class="informacion-meta">Escrito el <span>20/10/2021</span> por <span>Juan</span></p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla impedit molestiae amet in
                            doloremque inventore perferendis quos. Aperiam pariatur veniam quis sed quibusdam temporibus
                            placeat, voluptate magnam, voluptates fuga dolorem?</p>
                    </a>
                </div>

            </article>
        </section>

        <section cl ass="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas nulla mollitia est. Asperiores harum
                    tempore voluptates deserunt quis. Sint eveniet officia libero eius perspiciatis dolor quae vitae
                    esse voluptate alias.
                    <p>Carlos Diaz</p>
                </blockquote>
            </div>
        </section>
    </div>
    
   <?php include 'includes/templates/footer.php'; ?>
