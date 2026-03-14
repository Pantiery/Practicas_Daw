<?php include __DIR__ . '/../layout/header.php'; ?>

<?php

/* HERO */

$tituloHero = "Noticias del Centro";
$subtituloHero = "Novedades, avisos y actividades del centro deportivo";

$imagenesHero = [
    "../assets/img/heros/hero-basico/fondo-hero-noticias1.jpg",
    "../assets/img/heros/hero-basico/fondo-hero-noticias2.jpg",
    "../assets/img/heros/hero-basico/fondo-hero-noticias3.jpg"
];

include __DIR__ . '/../components/component-hero-basico.php';

?>

<!-- Sección noticias -->

<section class="container-fluid seccion-noticias px-5">

    <h2 class="seccion-titulo text-center mb-5">
        Todas las noticias
    </h2>

        <?php include __DIR__ . '/../components/component-lista-noticias.php'; ?>

</section>


<!-- Sección asociados -->

<section class="container fondo-card-hero-principal my-5">

    <h2 class="seccion-subtitulo text-center mb-4">Colaboradores</h2>

    <div class="row">

        <?php
        $imagen = "../assets/img/logos/logo-asociados/asociacion_pensionistas.png";
        $titulo = "Asociación Residencias Pensionistas Ferroviarios";
        $descripcion = "La Asociación para Residencias de Pensionistas Ferroviarios es una asociacion solidaria, sin ánimo de lucro, que gestiona residencias de Tercera Edad desde 1931.";
        $link = "https://arpf.es";

        include __DIR__ . '/../components/component-card.php';
        ?>

        <?php
        $imagen = "../assets/img/logos/logo-asociados/logo-ADFerroviaria-5.png";
        $titulo = "Agrupación Deportiva Ferroviaria";
        $descripcion = "AD Ferroviaria: Más de 100 años de fútbol auténtico.";
        $link = "https://adferroviaria.org";

        include __DIR__ . '/../components/component-card.php';
        ?>

        <?php
        $imagen = "../assets/img/logos/logo-asociados/Logo_Turisfer_Asoc_Turistica_Ferroviaria_60anios_2023.png";
        $titulo = "Asociación Turística Ferroviaria";
        $descripcion = "Turisferr ofrece a sus socios viajes, alojamientos y experiencias de ocio a precios accesibles. En la plataforma se pueden consultar destinos, ofertas y servicios turísticos, facilitando la planificación y reserva de viajes.";
        $link = "https://www.turisferr.com";

        include __DIR__ . '/../components/component-card.php';
        ?>

    </div>

</section>

<?php include __DIR__ . '/../layout/footer.php'; ?>