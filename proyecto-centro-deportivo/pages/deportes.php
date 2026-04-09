<?php include '../layout/header.php'; ?>


<?php

$tituloHero = "Deportes";

$subtituloHero = "Espacios para disfrutar.";

$linkSubtitulo = "#";

$imagenesHero = [
    "../assets/img/heros/hero-principal/fondo_hero.jpg",
    "../assets/img/heros/hero-principal/fondo_hero3.jpg"
];

include '../components/component-hero-secciones.php';

?>

<!-- cards con botones -->


<?php
$titulo = "Pádel";
$descripcion = "El pádel es uno de los deportes más populares del club, ideal tanto para principiantes como para jugadores avanzados. Se practica en pistas adaptadas y combina estrategia, coordinación y trabajo en equipo. El centro cuenta con instalaciones modernas y un entorno cómodo que permite disfrutar del juego de forma dinámica y social.";
$imagen = "../assets/img/cards/card-deporte/padel2.jpeg";
$boton1 = "Reservar";
$boton2 = "Ver disponibilidad";

include '../components/component-card-TIB.php';
?>

<hr class="w-50 mx-auto">

<?php
$titulo = "Tenis";
$descripcion = "El tenis es una disciplina completa que mejora la resistencia, la coordinación y la concentración. En el club se puede practicar tanto a nivel recreativo como competitivo, con pistas adecuadas para todos los niveles. Es una excelente opción para quienes buscan mantenerse activos mientras desarrollan técnica y precisión.";
$imagen = "../assets/img/cards/card-deporte/tenis2.jpg";
$boton1 = "Reservar";
$boton2 = "Ver disponibilidad";


include '../components/component-card-TIB-invertida.php';
?>

<hr class="w-50 mx-auto">

<?php
$titulo = "Tenis de mesa";
$descripcion = "El tenis de mesa es un deporte ágil y entretenido que pone a prueba los reflejos y la rapidez mental. El club dispone de espacios habilitados para su práctica, permitiendo disfrutar tanto de partidas informales como de entrenamientos más técnicos. Es ideal para todas las edades y niveles.";
$imagen = "../assets/img/cards/card-deporte/ping pong2.jpg";
$boton1 = "Reservar";
$boton2 = "Ver disponibilidad";


include '../components/component-card-TIB.php';
?>

<hr class="w-50 mx-auto">

<?php
$titulo = "Karate Do";
$descripcion = "El Karate Do es un arte marcial tradicional que combina disciplina, autocontrol y desarrollo físico. A través de sus técnicas se mejora la coordinación, la fuerza y la concentración. Las clases están orientadas tanto a principiantes como a practicantes avanzados, fomentando valores como el respeto y la superación personal.";
$imagen = "../assets/img/cards/card-deporte/karate.webp";
$boton1 = "Reservar";
$boton2 = "Ver disponibilidad";


include '../components/component-card-TIB-invertida.php';
?>

<hr class="w-50 mx-auto">

<?php
$titulo = "Budo Taijutsu";
$descripcion = "El Budo Taijutsu es un arte marcial japonés que integra diferentes técnicas de defensa personal y control corporal. Su práctica desarrolla la agilidad, la percepción del entorno y la capacidad de reacción. En el club se ofrece un ambiente adecuado para aprender de forma progresiva, adaptándose al nivel de cada alumno.";
$imagen = "../assets/img/cards/card-deporte/budoTaijutsu.jpg";
$boton1 = "Reservar";
$boton2 = "Ver disponibilidad";


include '../components/component-card-TIB.php';
?>

<hr class="w-50 mx-auto">

<?php
$titulo = "Pilates";
$descripcion = "El pilates es una disciplina enfocada en el fortalecimiento del cuerpo, la mejora de la postura y la flexibilidad. Las sesiones se realizan en un ambiente tranquilo y controlado, ayudando a reducir el estrés y prevenir lesiones. Es una actividad ideal para mejorar el bienestar general independientemente de la edad o condición física.";
$imagen = "../assets/img/cards/card-deporte/pilates.jpg";
$boton1 = "Reservar";
$boton2 = "Ver disponibilidad";


include '../components/component-card-TIB-invertida.php';
?>

<!-- cards escuela de tenis -->

<hr class="w-50 mx-auto">

<section class="container-fluid fondo-card-hero-principal my-5">

    <h2 class="seccion-subtitulo text-center mb-4">Escuela de tenis</h2>

    <?php
    $ruta = __DIR__ . '/../data/card-tenis.json';

    $cards = [];

    if (file_exists($ruta)) {
        $json = file_get_contents($ruta);
        $data = json_decode($json, true);

        $cards = $data['cards'] ?? [];
    }
    ?>

    <div class="row">

        <?php foreach ($cards as $card): ?>

            <?php
            $imagen = $card['imagen'];
            $titulo = $card['titulo'];
            $contenido = $card['contenido'];
            $link = $card['link'];

            include '../components/component-card-deporte.php';
            ?>

        <?php endforeach; ?>

    </div>

</section>

<hr class="w-50 mx-auto my-5">

<?php
//card imagen texto
$titulo = "Pistas de césped artificial";
$descripcion = "
Las pistas de césped artificial ofrecen una superficie rápida y cómoda, ideal para un juego dinámico y continuo. 
Son perfectas tanto para entrenamientos como para partidos recreativos, proporcionando un buen agarre y menor impacto en las articulaciones.

Este tipo de pista favorece rallies más largos y un estilo de juego más accesible para todos los niveles.
";
$imagen = "../assets/img/cards/card-deporte/tenis.jpg";

include '../components/component-card-TI.php';
?>

<hr class="w-50 mx-auto">

<?php
//card imagen texto invertida
$titulo = "Pistas de cemento";
$descripcion = "
Las pistas de cemento destacan por su resistencia y velocidad de juego, siendo una opción ideal para jugadores que buscan mayor intensidad y precisión.

Permiten un bote más uniforme de la pelota, favoreciendo un juego técnico y competitivo. 
Son utilizadas tanto para entrenamientos exigentes como para competiciones oficiales dentro del club.
";
$imagen = "../assets/img/cards/card-deporte/tenis2.jpg";

include '../components/component-card-TI-invertida.php';
?>

<?php include '../layout/footer.php'; ?>