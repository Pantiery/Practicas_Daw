<?php include '../layout/header.php'; ?>

<?php include '../components/component-hero.php'; ?>

<section class="container my-5">

    <h2 class="seccion-subtitulo text-center mb-4">Colaboradores</h2>

    <div class="row">

        <?php
        $imagen = "../assets/img/asociacion_pensionistas.png";
        $titulo = "Asociación Residencias Pensionistas Ferroviarios";
        $descripcion = "La Asociación para Residencias de Pensionistas Ferroviarios es una asociacion solidaria, sin ánimo de lucro, que gestiona residencias de Tercera Edad desde 1931.";
        $link = "https://arpf.es";

        include '../components/component-card.php';
        ?>

        <?php
        $imagen = "../assets/img/logo-ADFerroviaria-5.png";
        $titulo = "Agrupación Deportiva Ferroviaria";
        $descripcion = "AD Ferroviaria: Más de 100 años de fútbol auténtico.";
        $link = "https://adferroviaria.org";

        include '../components/component-card.php';
        ?>

        <?php
        $imagen = "../assets/img/Logo_Turisfer_Asoc_Turistica_Ferroviaria_60anios_2023.png";
        $titulo = "Asociación Turística Ferroviaria";
        $descripcion = "Turisferr ofrece a sus socios viajes, alojamientos y experiencias de ocio a precios accesibles. En la plataforma se pueden consultar destinos, ofertas y servicios turísticos, facilitando la planificación y reserva de viajes..";
        $link = "https://www.turisferr.com";

        include '../components/component-card.php';
        ?>

    </div>

</section>

<?php include '../layout/footer.php'; ?>