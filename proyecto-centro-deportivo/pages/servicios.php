<?php include '../layout/header.php'; ?>

<!-- hero-servicios -->
<?php

$tituloHero = "Servicios";
$subtituloHero = "“Disponemos de los siguientes servicios.”";

$linkSubtitulo = "#";

$imagenesHero = [
    "../assets/img/heros/hero-montaña/montaña-hero-1.jpg",
    "../assets/img/heros/hero-montaña/montaña-hero-2.jpg",
    "../assets/img/heros/hero-montaña/montaña-hero-3.jpg"
];

include '../components/component-hero-secciones.php';
?>

<section class="container-fluid my-5">

    <div class="row">

        <?php
        $titulo = "Medicina China";
        $descripcion = "Disciplina terapéutica milenaria que busca restablecer el equilibrio del organismo mediante técnicas como la acupuntura, el masaje Tuina, la moxibustión o las ventosas.";
        $horario = "Lunes y miércoles · 16:00 - 20:00";
        $precio = "Desde 35 € por sesión";
        $imagen = "../assets/img/servicios/medicina-china.jpg";
        include '../components/component-card-servicio.php';
        ?>

        <?php
        $titulo = "Nutrición";
        $descripcion = "Asesoramiento nutricional personalizado para mejorar la salud, optimizar el rendimiento deportivo y adquirir hábitos alimentarios saludables.";
        $horario = "Martes y jueves · 10:00 - 14:00 | 16:00 - 20:00";
        $precio = "Primera consulta desde 45 €";
        $imagen = "../assets/img/servicios/nutricion.jpg";
        include '../components/component-card-servicio.php';
        ?>

        <?php
        $titulo = "Psicología";
        $descripcion = "Atención profesional orientada al bienestar emocional, la gestión del estrés, la ansiedad y el desarrollo personal.";
        $horario = "Lunes a viernes · 17:00 - 21:00";
        $precio = "Sesión individual desde 50 €";
        $imagen = "../assets/img/servicios/psicologia.jpg";
        include '../components/component-card-servicio.php';
        ?>

        <?php
        $titulo = "Fisioterapia";
        $descripcion = "Prevención, tratamiento y recuperación de lesiones musculares y articulares mediante técnicas especializadas y atención personalizada.";
        $horario = "Lunes a viernes · 09:00 - 14:00 | 16:00 - 21:00";
        $precio = "Desde 35 € por sesión";
        $imagen = "../assets/img/servicios/fisioterapia.jpg";
        include '../components/component-card-servicio.php';
        ?>

    </div>

</section>

<!-- footer -->
<?php include '../layout/footer.php'; ?>