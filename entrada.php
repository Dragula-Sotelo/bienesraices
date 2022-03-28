<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
    ?>   

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoracion de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis scelerisque enim, vel malesuada dui. Suspendisse augue nunc, 
            dignissim non erat aliquet, bibendum maximus libero. Maecenas eu vehicula nisi. Vestibulum maximus scelerisque est ac volutpat. 
            Donec ut enim id lorem fermentum maximus. Proin in velit dolor. Donec lacinia tellus et eros eleifend dictum.
        </p>
        <p>
            Curabitur vulputate eget lorem vitae ullamcorper. Curabitur hendrerit odio tortor. Ut mollis turpis convallis laoreet commodo. 
            Quisque at dapibus lorem, tempor laoreet turpis. Praesent erat est, auctor pulvinar orci non, consectetur auctor lorem. Vestibulum ac lobortis dui.
        </p>
    </main>

    <?php 
    incluirTemplate('footer');
?>
