<?php include '../layout/header.php'; ?>


<!-- hero -->
<?php

$tituloHero = "Ocio";
$subtituloHero = "Ocio pensado para compartir buenos momentos.";

$linkSubtitulo = "#";

$imagenesHero = [
    "../assets/img/heros/hero-ocio/eventos3.webp",
    "../assets/img/heros/hero-ocio/barbacoa.jpg",
    "../assets/img/heros/hero-ocio/eventos2.jpg",
];

$textoBoton1 = "Deportes";
$linkBoton1 = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/deportes.php";
$claseBoton1 = "btn btn-amarillo";

$textoBoton2 = "Ocio";
$linkBoton2 = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/ocio.php";
$claseBoton2 = "boton-hero-secciones btn btn-outline-verde";

$textoBoton3 = "Montaña";
$linkBoton3 = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/montana.php";
$claseBoton3 = "btn btn-rojo";

$textoBoton4 = "Cultura";
$linkBoton4 = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/cultura.php";
$claseBoton4 = "btn btn-outline-azul";

include '../components/component-hero-secciones.php';

?>

<?php include '../layout/footer.php'; ?>