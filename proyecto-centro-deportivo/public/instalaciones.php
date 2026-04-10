<?php include '../layout/header.php'; ?>

<?php
require_once __DIR__ . '/../config/app.php';
?>

<!-- hero-instalaciones -->
<?php

$tituloHero = "Instalaciones";
$subtituloHero = "“Descubre nuestras instalaciones de lujo.”";

$linkSubtitulo = "#";

$imagenesHero = [
    "../assets/img/heros/hero-montaña/montaña-hero-1.jpg",
    "../assets/img/heros/hero-montaña/montaña-hero-2.jpg",
    "../assets/img/heros/hero-montaña/montaña-hero-3.jpg"
];

include '../components/component-hero-secciones.php';
?>

<!-- instalaciones externas -->

<section class="container-fluid my-5">

    <h1 class="mb-4 seccion-subtitulo text-center">Instalaciones Exteriores</h1>

    <div class="row">

        <?php
        $imagenes = [
            BASE_URL . "assets/img/cards/card-deporte/pelotaTenis.jpeg",
            BASE_URL . "assets/img/cards/card-deporte/personaTenis.jpeg",
            BASE_URL . "assets/img/cards/card-deporte/redTenis.jpeg",
            BASE_URL . "assets/img/cards/card-deporte/tenis.jpg",
            BASE_URL . "assets/img/cards/card-deporte/tenis2.jpg"
        ];

        $titulo = "Pista de tenis";
        $descripcion = "Espacio de tenis.";
        $link = "#";

        include '../components/component-card-instalaciones.php';
        ?>

        <?php
        $imagenes = [
            BASE_URL . "assets/img/cards/card-instalaciones/futbol-sala.jpg",
            BASE_URL . "assets/img/cards/card-instalaciones/futbol-sala1.jpg",
            BASE_URL . "assets/img/cards/card-instalaciones/futbol-sala2.jpg",
            BASE_URL . "assets/img/cards/card-instalaciones/futbol-sala3.jpg",
            BASE_URL . "assets/img/cards/card-instalaciones/futbol-sala4.jpg"
        ];

        $titulo = "Pista de fútbol sala";
        $descripcion = "Espacio dedicado al fútbol sala.";
        $link = "#";

        include '../components/component-card-instalaciones.php';
        ?>

        <?php
        $imagenes = [
            BASE_URL . "assets/img/cards/card-deporte/padel.jpg",
            BASE_URL . "assets/img/cards/card-deporte/padel2.jpeg",
            BASE_URL . "assets/img/cards/card-deporte/raqueta.png",
            BASE_URL . "assets/img/cards/card-instalaciones/padel3.jpeg",
            BASE_URL . "assets/img/cards/card-instalaciones/padel4.jpg"
        ];

        $titulo = "Pista de pádel";
        $descripcion = "Espacio para actividades deportivas y formativas.";
        $link = "#";

        include '../components/component-card-instalaciones.php';
        ?>

        <!-- duplicadas exterior -->

         <?php
        $imagenes = [
            BASE_URL . "assets/img/cards/card-instalaciones/parrilla1.jpg",
            BASE_URL . "assets/img/cards/card-instalaciones/parrilla2.jpg"
        ];

        $titulo = "Zona de parrillas";
        $descripcion = "Área al aire libre equipada con parrillas para disfrutar de deliciosas comidas al aire libre.";
        $link = "#";

        include '../components/component-card-instalaciones.php';
        ?>

    </div>

</section>

<!-- instalaciones interiores -->

<section class="container-fluid my-5">

    <h1 class="mb-4 seccion-subtitulo text-center">Instalaciones Interiores</h1>

    <div class="row">

        <?php
        $imagenes = [
            BASE_URL . "assets/img/cards/card-instalaciones/sala reuniones.webp",
            BASE_URL . "assets/img/cards/card-instalaciones/sala reuniones1.jpeg",
            BASE_URL . "assets/img/cards/card-instalaciones/sala reuniones2.jpg",
            BASE_URL . "assets/img/cards/card-instalaciones/sala reuniones3.jpg",
            BASE_URL . "assets/img/cards/card-instalaciones/sala reuniones4.jpg",
            BASE_URL . "assets/img/cards/card-instalaciones/sala reuniones5.jpg"
        ];

        $titulo = "Sala de actos";
        $descripcion = "Sala acondicionada para reuniones, conferencias y eventos corporativos.";
        $link = "#";

        include '../components/component-card-instalaciones.php';
        ?>

        <?php
        $imagenes = [
            "../assets/img/cards/card-instalaciones/sala polivalente1.jpg",
            "../assets/img/cards/card-instalaciones/sala polivalente2.jpg"
        ];

        $titulo = "Sala polivalente 1";
        $descripcion = "Espacio para actividades deportivas y formativas.";
        $link = "#";

        include '../components/component-card-instalaciones.php';
        ?>

        <?php
        $imagenes = [
            "../assets/img/cards/card-instalaciones/dojo1.jpg",
            "../assets/img/cards/card-instalaciones/dojo2.jpg",
            "../assets/img/cards/card-instalaciones/dojo3.jpg",
            "../assets/img/cards/card-instalaciones/dojo4.jpg",
            "../assets/img/cards/card-instalaciones/dojo5.jpg"
        ];

        $titulo = "Dojo de artes marciales";
        $descripcion = "Espacio para practicar artes marciales y actividades relacionadas.";
        $link = "#";

        include '../components/component-card-instalaciones.php';
        ?>

        <!-- doble de cards -->

        <?php
        $imagenes = [
            "../assets/img/cards/card-instalaciones/sala polivalente3.jpg",
            "../assets/img/cards/card-instalaciones/sala polivalente4.jpg"
        ];

        $titulo = "Sala polivalente 2";
        $descripcion = "Sala acondicionada para reuniones, conferencias y eventos corporativos.";
        $link = "#";

        include '../components/component-card-instalaciones.php';
        ?>

        <?php
        $imagenes = [
            "../assets/img/cards/card-instalaciones/sala juntas1.png",
            "../assets/img/cards/card-instalaciones/sala juntas2.webp"
        ];

        $titulo = "Sala de juntas";
        $descripcion = "Reuniones y encuentros corporativos.";
        $link = "#";

        include '../components/component-card-instalaciones.php';
        ?>

        <?php
        $imagenes = [
            "../assets/img/cards/card-instalaciones/sala polivalente6.jpg",
            "../assets/img/cards/card-instalaciones/sala polivalente5.jpg"
        ];

        $titulo = "Sala polivalente 3";
        $descripcion = "Espacio para tus momentos de ocio o para actividades deportivas y formativas.";
        $link = "#";

        include '../components/component-card-instalaciones.php';
        ?>

        <?php
        $imagenes = [
            "../assets/img/cards/card-instalaciones/cafeteria1.webp",
            "../assets/img/cards/card-instalaciones/cafeteria2.jpg"
        ];

        $titulo = "Cafetería";
        $descripcion = "Área dedicada a la preparación y consumo de bebidas y snacks.";
        $link = "#";

        include '../components/component-card-instalaciones.php';
        ?>

        <?php
        $imagenes = [
            "../assets/img/cards/card-instalaciones/medicina china1.jpg",
            "../assets/img/cards/card-instalaciones/medicina china2.jpg"
        ];

        $titulo = "Sala de medicina China";
        $descripcion = "Espacio dedicado a la práctica de la medicina tradicional china, incluyendo acupuntura, fitoterapia y otras terapias relacionadas.";
        $link = "#";

        include '../components/component-card-instalaciones.php';
        ?>

    </div>

</section>

<?php include '../layout/footer.php'; ?>