<?php include '../layout/header.php'; ?>

      <?php

$tituloHero = "Montaña";
$subtituloHero = "“Las montañas no se conquistan, se respetan.”";

$linkSubtitulo = "#";

$imagenesHero = [
    "../assets/img/hero/eventos.jpg",
    "../assets/img/hero/montaña1.jpg",
    "../assets/img/hero/barbacoa.jpg",
    "../assets/img/hero/budo-taijutsu.webp",
    "../assets/img/hero/montaña2.jpg"
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

<?php include '../components/component-montanya.php'; ?>

<?php include '../layout/footer.php'; ?>