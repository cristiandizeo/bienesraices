<?php
require 'includes/funciones.php';
incluirTemplate('header'); ?>

   <main class="contenedor seccion">
       <h1>Nosotros</h1>

       <div class="contenido-nosotros">
           <div class="imagen">
               <picture>
                   <source srcset="build/img/nosotros.webp" type="image/webp">
                   <source srcset="build/img/nosotros.jpg" type="image/jpg">
                   <img loading="lazy " src="build/img/nosotros.jpg" alt="Nosotros">
               </picture>
           </div>
           <div class="texto-nosotros">
               <blockquote>
                   25 años de experiencia
               </blockquote>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione adipisci sunt porro aut atque quasi reiciendis, temporibus cum recusandae, nisi earum rem pariatur magnam maxime. Consequatur nobis labore tenetur laborum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, iste dolore? Porro fugit odio laboriosam nemo, nobis, est, architecto minima facere repellendus consectetur illum nam maxime culpa ducimus maiores officia.
                   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis quas ullam voluptas officia temporibus autem officiis. Ea vero optio fugit deleniti? Illo repudiandae, exercitationem quam necessitatibus minima nesciunt beatae totam!</p>
               </p>
           </div>
       </div>
   </main>

   <section class="contenedor seccion">
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
</section>

<?php incluirTemplate('footer'); ?>