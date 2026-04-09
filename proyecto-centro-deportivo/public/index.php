<?php include '../layout/header.php'; ?>

<!-- hero -->

<?php

$logoHero = "../assets/img/logos/logo-propio/logo-delicias.png";
$tituloHero = null; // quitamos el texto

$subtituloHero = "Conoce más sobre nuestro Club Deportivo Delicias.";

$linkSubtitulo = "#";

$textoBoton1 = "Reservas";
$linkBoton1 = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/public/reservas.php";

$textoBoton2 = "Ver instalaciones";
$linkBoton2 = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/public/instalaciones.php";

$imagenesHero = [
    "../assets/img/heros/hero-secciones/ferrocarril1.jpg",
    "../assets/img/heros/hero-secciones/ferrocarril2.jpg",
    "../assets/img/heros/hero-secciones/ferrocarril3.jpg",
    "../assets/img/heros/hero-secciones/ferrocarril4.jpg"
];

include '../components/component-hero.php';

?>

<?php

$categoria = "centro";

include __DIR__ . '/../components/component-ultimas-noticias.php';

?>

<!-- Sección carrousel -->

<!-- FILA SUPERIOR -->

<section class="carousel-secciones seccion-carrusel">

    <div class="carousel-track">

        <?php
        $imagen = "../assets/img/cards/card-secciones/montana1.jpg";
        $titulo = "Montaña";
        $descripcion = "Camina al aire libre, sé libre.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/montana.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-deporte/tenis.jpg";
        $titulo = "Tenis";
        $descripcion = "Créete un profesional.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-deporte/futbol-sala.jpg";
        $titulo = "Fútbol sala";
        $descripcion = "Juega, diviértete.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-cultura/yoga.jpg";
        $titulo = "Yoga";
        $descripcion = "Mejora tu condición física.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/servicios.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-deporte/ping pong.jpg";
        $titulo = "Ping Pong";
        $descripcion = "A lo grande o pequeño.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-ocio/Barbacoa_provisional.jpg";
        $titulo = "Barbacoa";
        $descripcion = "Carne o verdura a la brasa.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/public/reservas.php";
        include '../components/component-seccion-card.php';
        ?>

        <!-- DUPLICADAS SUPERIOR -->

        <?php
        $imagen = "../assets/img/cards/card-secciones/montana1.jpg";
        $titulo = "Montaña";
        $descripcion = "Camina al aire libre, sé libre.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/montana.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-deporte/tenis.jpg";
        $titulo = "Tenis";
        $descripcion = "Créete un profesional.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-deporte/futbol-sala.jpg";
        $titulo = "Fútbol sala";
        $descripcion = "Juega, diviértete.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-cultura/yoga.jpg";
        $titulo = "Yoga";
        $descripcion = "Mejora tu condición física.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/servicios.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-deporte/ping pong.jpg";
        $titulo = "Ping Pong";
        $descripcion = "A lo grande o pequeño.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-ocio/Barbacoa_provisional.jpg";
        $titulo = "Barbacoa";
        $descripcion = "Carne o verdura a la brasa.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/public/reservas.php";
        include '../components/component-seccion-card.php';
        ?>

         <!-- TRIPLICADAS SUPERIOR -->

        <?php
        $imagen = "../assets/img/cards/card-secciones/montana1.jpg";
        $titulo = "Montaña";
        $descripcion = "Camina al aire libre, sé libre.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/montana.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-deporte/tenis.jpg";
        $titulo = "Tenis";
        $descripcion = "Créete un profesional.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-deporte/futbol-sala.jpg";
        $titulo = "Fútbol sala";
        $descripcion = "Juega, diviértete.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-cultura/yoga.jpg";
        $titulo = "Yoga";
        $descripcion = "Mejora tu condición física.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/servicios.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-deporte/ping pong.jpg";
        $titulo = "Ping Pong";
        $descripcion = "A lo grande o pequeño.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-ocio/Barbacoa_provisional.jpg";
        $titulo = "Barbacoa";
        $descripcion = "Carne o verdura a la brasa.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/public/reservas.php";
        include '../components/component-seccion-card.php';
        ?>

    </div>
</section>


<!-- FILA INFERIOR -->

<section class="carousel-secciones reverse seccion-carrusel">

    <div class="carousel-track">

        <?php
        $imagen = "../assets/img/cards/card-deporte/padel.jpg";
        $titulo = "Pádel";
        $descripcion = "Intensidad, esfuerzo, diversión.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-cultura/coro.jpg";
        $titulo = "Coro";
        $descripcion = "Te gusta cantar?.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/cultura.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-ocio/Cafeteria_provisional.jpeg";
        $titulo = "Cafetería";
        $descripcion = "Tu espacio, tu café.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/public/reservas.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-cultura/danza.jpg";
        $titulo = "Danza";
        $descripcion = "¿Bailamos?.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/cultura.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-ocio/Sala_de_juntas_provisional.jpg";
        $titulo = "Eventos";
        $descripcion = "Tus fiestas y eventos.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/public/reservas.php";
        include '../components/component-seccion-card.php';
        ?>
        

        <!-- DUPLICADAS INFERIOR -->


        <?php
        $imagen = "../assets/img/cards/card-deporte/padel.jpg";
        $titulo = "Pádel";
        $descripcion = "Intensidad, esfuerzo, diversión.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-cultura/coro.jpg";
        $titulo = "Coro";
        $descripcion = "Te gusta cantar?.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/cultura.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-ocio/Cafeteria_provisional.jpeg";
        $titulo = "Cafetería";
        $descripcion = "Tu espacio, tu café.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/public/reservas.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-cultura/danza.jpg";
        $titulo = "Danza";
        $descripcion = "¿Bailamos?.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/cultura.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-ocio/Sala_de_juntas_provisional.jpg";
        $titulo = "Eventos";
        $descripcion = "Tus fiestas y eventos.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/public/reservas.php";
        include '../components/component-seccion-card.php';
        ?>

        <!-- TRIPLICADAS INFERIOR -->


        <?php
        $imagen = "../assets/img/cards/card-deporte/padel.jpg";
        $titulo = "Pádel";
        $descripcion = "Intensidad, esfuerzo, diversión.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-cultura/coro.jpg";
        $titulo = "Coro";
        $descripcion = "Te gusta cantar?.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/cultura.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-ocio/Cafeteria_provisional.jpeg";
        $titulo = "Cafetería";
        $descripcion = "Tu espacio, tu café.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/public/reservas.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-cultura/danza.jpg";
        $titulo = "Danza";
        $descripcion = "¿Bailamos?.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/cultura.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-ocio/Sala_de_juntas_provisional.jpg";
        $titulo = "Eventos";
        $descripcion = "Tus fiestas y eventos.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/public/reservas.php";
        include '../components/component-seccion-card.php';
        ?>

    </div>
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