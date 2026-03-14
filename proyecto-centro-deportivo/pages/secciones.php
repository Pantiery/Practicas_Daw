<?php include '../layout/header.php'; ?>


<?php

$tituloHero = "Secciones";

$subtituloHero = "Espacios para disfrutar.";

$linkSubtitulo = "#";

$imagenesHero = [
    "../assets/img/heros/hero-secciones/ferrocarril1.jpg",
    "../assets/img/heros/hero-secciones/ferrocarril2.jpg",
    "../assets/img/heros/hero-secciones/ferrocarril3.jpg",
    "../assets/img/heros/hero-secciones/ferrocarril4.jpg"
];

$textoBoton1 = "Deportes";
$linkBoton1 = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/deportes.php";
$claseBoton1 = "btn btn-amarillo";

$textoBoton2 = "Ocio";
$linkBoton2 = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/ocio.php";
$claseBoton2 = "boton-hero-secciones btn btn-outline-verde";

$textoBoton3 = "Montaña";
$linkBoton3 = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/montaña.php";
$claseBoton3 = "btn btn-rojo";

$textoBoton4 = "Cultura";
$linkBoton4 = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/cultura.php";
$claseBoton4 = "btn btn-outline-azul";

include '../components/component-hero-secciones.php';

?>


<!-- FILA SUPERIOR -->

<section class="carousel-secciones seccion-carrusel">

    <div class="carousel-track">

        <?php
        $imagen = "../assets/img/cards/card-montaña/montana1.jpg";
        $titulo = "Montaña";
        $descripcion = "Camina al aire libre, sé libre.";
        $link = "montaña.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-deporte/tenis.jpg";
        $titulo = "Tenis";
        $descripcion = "Créete un profesional.";
        $link = "deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-deporte/futbol-sala.jpg";
        $titulo = "Fútbol sala";
        $descripcion = "Juega, diviértete.";
        $link = "deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-cultura/yoga.jpg";
        $titulo = "Yoga";
        $descripcion = "Mejora tu condición física.";
        $link = "cultura.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-deporte/ping pong.jpg";
        $titulo = "Ping Pong";
        $descripcion = "A lo grande o pequeño.";
        $link = "deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-ocio/Barbacoa_provisional.jpg";
        $titulo = "Barbacoa";
        $descripcion = "Carne o verdura a la brasa.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/ocio.php";
        include '../components/component-seccion-card.php';
        ?>

        <!-- DUPLICADAS SUPERIOR -->

        <?php
        $imagen = "../assets/img/cards/card-montaña/montana1.jpg";
        $titulo = "Montaña";
        $descripcion = "Camina al aire libre, sé libre.";
        $link = "montaña.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-deporte/tenis.jpg";
        $titulo = "Tenis";
        $descripcion = "Créete un profesional.";
        $link = "deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-deporte/futbol-sala.jpg";
        $titulo = "Fútbol sala";
        $descripcion = "Juega, diviértete.";
        $link = "deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-cultura/yoga.jpg";
        $titulo = "Yoga";
        $descripcion = "Mejora tu condición física.";
        $link = "cultura.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-deporte/ping pong.jpg";
        $titulo = "Ping Pong";
        $descripcion = "A lo grande o pequeño.";
        $link = "deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-ocio/Barbacoa_provisional.jpg";
        $titulo = "Barbacoa";
        $descripcion = "Carne o verdura a la brasa.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/ocio.php";
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
        $link = "deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-cultura/coro.jpg";
        $titulo = "Coro";
        $descripcion = "Te gusta cantar?.";
        $link = "cultura.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-ocio/Cafeteria_provisional.jpeg";
        $titulo = "Cafetería";
        $descripcion = "Tu espacio, tu café.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/ocio.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-cultura/danza.jpg";
        $titulo = "Danza";
        $descripcion = "¿Bailamos?.";
        $link = "ocio.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-ocio/Sala_de_juntas_provisional.jpg";
        $titulo = "Eventos";
        $descripcion = "Tus fiestas y eventos.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/ocio.php";
        include '../components/component-seccion-card.php';
        ?>
        

        <!-- DUPLICADAS INFERIOR -->


        <?php
        $imagen = "../assets/img/cards/card-deporte/padel.jpg";
        $titulo = "Pádel";
        $descripcion = "Intensidad, esfuerzo, diversión.";
        $link = "deportes.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-cultura/coro.jpg";
        $titulo = "Coro";
        $descripcion = "Te gusta cantar?.";
        $link = "cultura.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-ocio/Cafeteria_provisional.jpeg";
        $titulo = "Cafetería";
        $descripcion = "Tu espacio, tu café.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/ocio.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-cultura/danza.jpg";
        $titulo = "Danza";
        $descripcion = "¿Bailamos?.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/ocio.php";
        include '../components/component-seccion-card.php';
        ?>

        <?php
        $imagen = "../assets/img/cards/card-ocio/Sala_de_juntas_provisional.jpg";
        $titulo = "Eventos";
        $descripcion = "Tus fiestas y eventos.";
        $link = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/ocio.php";
        include '../components/component-seccion-card.php';
        ?>

    </div>
</section>

<?php include '../layout/footer.php'; ?>