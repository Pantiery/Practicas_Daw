<?php include '../layout/header.php'; ?>

<?php

$tituloHero = "Centro Deportivo Delicias";

$subtituloHero = "Conoce más sobre nuestro Club Deportivo Delicias.";

$linkSubtitulo = "#";

$textoBoton1 = "Hazte socio";
$linkBoton1 = "#";

$textoBoton2 = "Ver instalaciones";
$linkBoton2 = "#";

$imagenesHero = [
    "../assets/img/heros/hero-principal/fondo_hero.jpg",
    "../assets/img/heros/hero-principal/fondo_hero3.jpg"
];

include '../components/component-hero.php';

?>

<?php

$categoria = "centro";

include __DIR__ . '/../components/component-ultimas-noticias.php';

?>

<!-- Sección asociados -->

<section class="container fondo-card-hero-principal my-5">

    <h2 class="seccion-subtitulo text-center mb-4">Colaboradores</h2>

    <div class="row">

        <?php
        $imagen = "../assets/img/logos/logo-asociados/asociacion_pensionistas.png";
        $titulo = "Asociación Residencias Pensionistas Ferroviarios";
        $descripcion = "La Asociación para Residencias de Pensionistas Ferroviarios es una asociacion solidaria, sin ánimo de lucro, que gestiona residencias de Tercera Edad desde 1931.";
        $link = "https://arpf.es";

        include '../components/component-card.php';
        ?>

        <?php
        $imagen = "../assets/img/logos/logo-asociados/logo-ADFerroviaria-5.png";
        $titulo = "Agrupación Deportiva Ferroviaria";
        $descripcion = "AD Ferroviaria: Más de 100 años de fútbol auténtico.";
        $link = "https://adferroviaria.org";

        include '../components/component-card.php';
        ?>

        <?php
        $imagen = "../assets/img/logos/logo-asociados/Logo_Turisfer_Asoc_Turistica_Ferroviaria_60anios_2023.png";
        $titulo = "Asociación Turística Ferroviaria";
        $descripcion = "Turisferr ofrece a sus socios viajes, alojamientos y experiencias de ocio a precios accesibles. En la plataforma se pueden consultar destinos, ofertas y servicios turísticos, facilitando la planificación y reserva de viajes..";
        $link = "https://www.turisferr.com";

        include '../components/component-card.php';
        ?>

    </div>

</section>

<?php include '../layout/footer.php'; ?>