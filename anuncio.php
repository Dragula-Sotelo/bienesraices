<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
    ?>   

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p>4</p>
                </li>
            </ul>
            
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
    </main>

    <?php 
    incluirTemplate('footer');
?>