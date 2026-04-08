<?php include '../layout/header.php'; ?>

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

<section class="container my-5">

<h1 class="mb-4">Instalaciones</h1>

<div class="row">

<?php
$imagen = "https://via.placeholder.com/400x250";
$titulo = "Sala Polivalente";
$descripcion = "Espacio para actividades deportivas y formativas.";
$link = "#";

include '../components/component-card.php';
?>

<?php
$imagen = "https://via.placeholder.com/400x250";
$titulo = "Pista de Pádel";
$descripcion = "Pista exterior para partidos y entrenamiento.";
$link = "#";

include '../components/component-card.php';
?>

<?php
$imagen = "https://via.placeholder.com/400x250";
$titulo = "Dojo";
$descripcion = "Espacio dedicado a artes marciales.";
$link = "#";

include '../components/component-card.php';
?>

</div>

</section>

<?php include '../layout/footer.php'; ?>