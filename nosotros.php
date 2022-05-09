<?php
    require 'includes/app.php';
    incluirTemplate('header');
    ?>   

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis scelerisque enim, vel malesuada dui. Suspendisse augue nunc, 
                    dignissim non erat aliquet, bibendum maximus libero. Maecenas eu vehicula nisi. Vestibulum maximus scelerisque est ac volutpat. 
                    Donec ut enim id lorem fermentum maximus. Proin in velit dolor. Donec lacinia tellus et eros eleifend dictum.
                </p>
                <p>
                    Curabitur vulputate eget lorem vitae ullamcorper. Curabitur hendrerit odio tortor. Ut mollis turpis convallis laoreet commodo. 
                    Quisque at dapibus lorem, tempor laoreet turpis. Praesent erat est, auctor pulvinar orci non, consectetur auctor lorem. Vestibulum ac lobortis dui.
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Veniam doloremque aspernatur illum recusandae sapiente tenetur, earum voluptatem eius omnis cumque temporibus minima nostrum ipsum incidunt voluptatibus non cupiditate nam deleniti.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Veniam doloremque aspernatur illum recusandae sapiente tenetur, earum voluptatem eius omnis cumque temporibus minima nostrum ipsum incidunt voluptatibus non cupiditate nam deleniti.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Veniam doloremque aspernatur illum recusandae sapiente tenetur, earum voluptatem eius omnis cumque temporibus minima nostrum ipsum incidunt voluptatibus non cupiditate nam deleniti.</p>
            </div>
        </div>
    </section>

    <?php 
    incluirTemplate('footer');
?>
