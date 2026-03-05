<?php include '../layout/header.php'; ?>

<?php include '../components/component-hero.php'; ?>

<section class="container my-5">

<h2 class="mb-4">Instalaciones destacadas</h2>

<div class="row">

<?php
$imagen = "https://via.placeholder.com/400x250";
$titulo = "Sala Polivalente";
$descripcion = "Espacio para actividades deportivas.";
$link = "#";

include '../components/component-card.php';
?>

<?php
$imagen = "https://via.placeholder.com/400x250";
$titulo = "Pista de Pádel";
$descripcion = "Pista exterior para partidos.";
$link = "#";

include '../components/component-card.php';
?>

<?php
$imagen = "https://via.placeholder.com/400x250";
$titulo = "Dojo";
$descripcion = "Espacio para artes marciales.";
$link = "#";

include '../components/component-card.php';
?>

</div>

</section>

<?php include '../layout/footer.php'; ?>