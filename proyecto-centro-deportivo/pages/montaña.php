<?php
$logoNavbar = "../assets/img/logos/logo-montaña/logo-montaña.png";
include("../layout/header.php");
?>

<!-- hero-montaña -->
      <?php

$tituloHero = "Montaña";
$subtituloHero = "“Las montañas no se conquistan, se respetan.”";

$linkSubtitulo = "#";

$imagenesHero = [
    "../assets/img/heros/hero-montaña/montaña-hero-1.jpg",
    "../assets/img/heros/hero-montaña/montaña-hero-2.jpg",
    "../assets/img/heros/hero-montaña/montaña-hero-3.jpg"
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

<!-- card-texto generico -->

<?php

$titulo = "Federación Madrileña de Montañismo";

$descripcion = "Durante el año 2025 la reunión mensual de la Sección de Montaña será los segundos jueves de mes, con horario abierto entre las 18 y 20 horas. Estas reuniones son para que los socios acudáis a exponer vuestras sugerencias y quejas. Tramitamos la Licencia Federativa de Montaña a todos los socios.";

$subtitulo = "Adscrito a Federación Madrileña De Montañismo";

$detalle = "Avda. Salas de los Infantes, 1 – 5º
28034 – Madrid
Tel: 91 527 38 01
federacion@fmm.es";

$linkBoton3 = "https://centrodelicias.org/calendario-eventos/";

$textoBoton3 = "Ver calendario salidas";

include("../components/component-card-texto-sombreado.php");

?>

<hr class="w-50 mx-auto">

<!-- seccion-noticias -->

<?php $categoria = "montana";

include __DIR__ . '/../components/component-ultimas-noticias.php';?>

<hr class="w-50 mx-auto">

<?php

$textoBoton1 = "Normativa";
$linkBoton1 = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/deportes.php";
$claseBoton1 = "btn btn-amarillo";

$textoBoton2 = "Condiciones";
$linkBoton2 = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/ocio.php";
$claseBoton2 = "boton-hero-secciones btn btn-outline-verde";

$textoBoton3 = "Licencia";
$linkBoton3 = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/montaña.php";
$claseBoton3 = "btn btn-rojo";

$textoBoton4 = "Marchas";
$linkBoton4 = "http://localhost/Practicas_Daw/proyecto-centro-deportivo/pages/cultura.php";
$claseBoton4 = "btn btn-outline-azul";

include '../components/component-card-botones.php';

?>

<!-- card-montaña -->

<?php
$tituloExtra = "Normativa";
$titulo = "NORMAS PARA LA ADJUDICACIÓN DE PLAZAS EN LAS
SALIDAS DE LA SECCIÓN DE MONTAÑA";
$descripcion = "Para consultar las normas completas de reserva de plazas para las salidas del
Centro Deportivo Delicias Madrid, puede acceder al documento oficial en formato PDF.";
$imagen = "../assets/img/cards/card-montaña/030123-NORMAS-PARA-LA-ADJUDICACION-DE-PLAZAS-EN-LAS-SALIDAS-DE-LA-SECCION-DE-MONTANA.jpg";

include '../components/component-card-TIE.php';
?>

<hr class="w-50 mx-auto">

<?php
$tituloExtra = "Condiciones";
$titulo = "Salón de actos";
$descripcion = "Lorem ipsum dolor sit amet...";
$imagen = "../assets/img/cards/card-montaña/montaña2.webp";


include '../components/component-card-TI-invertida.php';
?>

<hr class="w-50 mx-auto">

<?php
$tituloExtra = "Licencia";
$titulo = "Cafetería";
$descripcion = "Lorem ipsum dolor sit amet...";
$imagen = "../assets/img/cards/card-montaña/montaña3.jpg";

include '../components/component-card-TI.php';
?>

<hr class="w-50 mx-auto">

<?php
$tituloExtra = "Marchas";
$titulo = "Salón de actos";
$descripcion = "Lorem ipsum dolor sit amet...";
$imagen = "../assets/img/cards/card-montaña/montaña4.jpg";


include '../components/component-card-TI-invertida.php';
?>

<?php include '../layout/footer.php'; ?>