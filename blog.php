<?php include 'includes/templates/header.php'; ?>

   <main class="contenedor seccion contenido-centrado">
       <h1>Blog</h1>

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
                <p>Escrito el <span>20/10/2021</span> por <span>Juan</span></p>
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
                <p>Escrito el <span>20/10/2021</span> por <span>Juan</span></p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla impedit molestiae amet in
                    doloremque inventore perferendis quos. Aperiam pariatur veniam quis sed quibusdam temporibus
                    placeat, voluptate magnam, voluptates fuga dolorem?</p>
            </a>
        </div>

    </article>
   </main>
    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <a href="nosotros.php">Nosotros</a>
            <a href="anuncios.php">Anuncios</a>
            <a href="blog.php">Blog</a>
            <a href="contacto.php">Contacto</a>
        </div>
        <p class="copyright">Todos los derechos reservados 2021 &copy;</p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>