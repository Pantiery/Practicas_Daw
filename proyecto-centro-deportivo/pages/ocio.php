<?php include '../layout/header.php'; ?>

<?php

$tituloHero = "Ocio";
$subtituloHero = "Ocio pensado para compartir buenos momentos.";

$linkSubtitulo = "#";

$imagenesHero = [
    "../assets/img/hero/montaña2.jpg",
    "../assets/img/hero/budo-taijutsu.webp",
    "../assets/img/hero/barbacoa.jpg",
    "../assets/img/hero/montaña1.jpg",
    "../assets/img/hero/eventos.jpg"
];

$textoBoton1 = "Deportes";
$linkBoton1 = "#";
$claseBoton1 = "btn btn-amarillo";

$textoBoton2 = "Ocio";
$linkBoton2 = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/ocio.php";
$claseBoton2 = "boton-hero-secciones btn btn-outline-verde";

$textoBoton3 = "Montaña";
$linkBoton3 = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/montaña.php";
$claseBoton3 = "btn btn-rojo";

$textoBoton4 = "Cultura";
$linkBoton4 = "#";
$claseBoton4 = "btn btn-outline-azul";

include '../components/component-hero-secciones.php';

?>




<?php
$titulo = "Cafetería";
$descripcion = "Lorem ipsum dolor sit amet...";
$imagen = "../assets/img/ocio/Cafeteria_provisional.jpeg";
$boton1 = "Reservar";
$boton2 = "Ver disponibilidad";

include '../components/component-card-TI.php';
?>

<hr class="w-50 mx-auto">

<?php
$titulo = "Salón de actos";
$descripcion = "Lorem ipsum dolor sit amet...";
$imagen = "../assets/img/ocio/Salon_de_actos_provisional.jpg";
$boton1 = "Reservar";
$boton2 = "Ver disponibilidad";


include '../components/component-card-TI-invertida.php';
?>

<hr class="w-50 mx-auto">

<?php
$titulo = "Sala de juntas";
$descripcion = "Lorem ipsum dolor sit amet...";
$imagen = "../assets/img/ocio/Sala_de_juntas_provisional.jpg";
$boton1 = "Reservar";
$boton2 = "Ver disponibilidad";


include '../components/component-card-TI.php';
?>

<hr class="w-50 mx-auto">

<?php
$titulo = "Barbacoa";
$descripcion = "Lorem ipsum dolor sit amet...";
$imagen = "../assets/img/ocio/Barbacoa_provisional.jpg";
$boton1 = "Reservar";
$boton2 = "Ver disponibilidad";


include '../components/component-card-TI-invertida.php';
?>

<?php include '../layout/footer.php'; ?>