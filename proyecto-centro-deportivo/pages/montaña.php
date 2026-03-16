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

<!-- card-montaña -->

<?php
$tituloExtra = "Normativa";
$titulo = "NORMAS PARA LA ADJUDICACIÓN DE PLAZAS EN LAS
SALIDAS DE LA SECCIÓN DE MONTAÑA";
$descripcion = "Para consultar las normas completas de reserva de plazas para las salidas del
Centro Deportivo Delicias Madrid, puede acceder al documento oficial en formato PDF.";
$imagen = "../assets/img/cards/card-montaña/030123-NORMAS-PARA-LA-ADJUDICACION-DE-PLAZAS-EN-LAS-SALIDAS-DE-LA-SECCION-DE-MONTANA.jpg";
$rutaPDF = "../assets/documentos/030123-NORMAS-PARA-LA-ADJUDICACION-DE-PLAZAS-EN-LAS-SALIDAS-DE-LA-SECCION-DE-MONTANA.pdf";
include '../components/component-card-TIE.php';
?>

<hr class="w-50 mx-auto">

<?php
$tituloExtra = "Condiciones";
$titulo = "Condiciones de montaña";
$descripcion = "
1.‑ Actividad organizada por esta Sección de Montaña.<br>
2.‑ Actividades oficiales publicadas en el calendario de la Federación Madrileña de Montañismo.<br>
3.- Nos desplazamos en tren. Cuando sea necesario billete, cada participante sacará el suyo en la taquilla correspondiente.<br>
4.- El viaje se realiza en autocar. En este caso las plazas son limitadas y tienen preferencia los socios.<br>
5.- Se viaja en bus de línea regular, o bus+tren o viceversa. Cada participante se proveerá de los correspondientes billetes.<br>
M.‑ Actividad puntuable para el XXXIII TROFEO SOCIAL, patrocinado por el Centro Deportivo Cultural Delicias desde la Agrupación Deportiva «Centro Deportivo Delicias Madrid» (CDDM) nº reg. 10 de la C.A.M. y nº reg. 3276 del Ayto. de Madrid (Según Reglamento).<br>
P.- Promoción principiantes y amigos de los socios que deseen iniciarse en la práctica del Senderismo y Montañismo.<br>
<ul>
  <li>Los juveniles que deseen participar en estas actividades deberán contar con la debida autorización de padre, madre o tutor.</li>
  <li>Los infantiles estarán autorizados por padre, madre o tutor, valerse por si mismos o ir acompañados por persona mayor de edad.</li>
  <li>Todos los participantes estarán en posesión de la <b>LICENCIA FEDERATIVA</b> del año 2023, <b>SERÁ TRAMITADA POR LOS INTERESADOS DURANTE EL MES DE DICIEMBRE, EN LA OFICINA DE ATENCIÓN AL SOCIO DEL CENTRO CULTURAL, EN HORARIO de 09:30 a 22:30 h. de L-V y de 09:00 a 14:30 h los Sábados y Domingos.</b></li>
  <li>Para confirmar la realización de estas actividades, se pondrán en contacto con la <b>oficina de atención al socio</b> del Centro Cultural los <b>jueves anteriores a las fechas señaladas</b> para la realización de las mismas. Pueden producirse cambios imprevistos de última hora.</li>
  <li>Mensualmente se emitirá un programa detallado de las actividades que la Sección desarrolla en el mes. Toda la programación la encontrareis en el tablón de anuncios y en la página WEB del Centro Cultural.</li>
  <li>Por acuerdo de la Junta Directiva, el Centro Cultural abonará el importe de las <b>LICENCIAS FEDERATIVAS</b>, a los socios infantiles y juveniles, <b>QUE DURANTE EL AÑO 2023 REALICEN AL MENOS LOS DOS TERCIOS DE LAS MARCHAS PROGRAMADAS EN SUS RESPECTIVOS CALENDARIOS. ESTE IMPORTE SERÁ REINTEGRADO A LOS INTERESADOS A FINAL DE DICIEMBRE DEL CITADO AÑO.</b></li>
  <li>No tenemos guías profesionales por lo que cada montañero/ra debe responsabilizarse de sí mismo, se orientará en todo momento y llevará el equipo adecuado a las características de la actividad que va a realizar y a la estación climatológica en la que se desarrolla.</li>
  <li>La organización se reserva el derecho de alterar, total o parcialmente este programa, cuando las condiciones climatológicas u otras circunstancias así lo aconsejen.</li>
</ul>
<b>Cuenta en BANCA PUEYO para el pago de actividades ES92 0078 0119 8140 0000 0740</b><br>
<b>Es imprescindible que en el ingreso figure el nombre de la persona que realiza la actividad.</b> 
";
$imagen = "../assets/img/cards/card-montaña/check2-circle.svg";


$claseExtra = "imagen-svg-condiciones";
include '../components/component-card-TI-invertida.php';
?>

<hr class="w-50 mx-auto">

<?php
$tituloExtra = "Licencia";
$titulo = "Licencia montaña";
$descripcion = "
<h3>LAS TARIFAS DE LAS TARJETAS FEDERATIVAS SE MANTIENEN PARA 2023</h3><br>
<h4>Los padres federados con la FMM podrán tramitar las licencias anuales de sus hijos con un 50% de descuento en el seguro.</h4><br>
<p>La Federación Madrileña de Montañismo ha aprobado en Asamblea General las nuevas tarifas del 2019, sin variaciones respecto al año precedente en las licencias para mayores de edad.</p><br>
<p>Como novedad, Maphre ha reducido a la mitad el precio del seguro en las licencias anuales infantiles y juveniles para aquellos niños y jóvenes con la madre y/o el padre federado en la FMM. Una oferta por la que se llevaba tiempo batallando desde la Federación, a fin de ofrecer a nuestros montañeros todas las facilidades posibles para compartir su pasión por la naturaleza con sus hijos, educándoles en el amor y el respeto por el medio ambiente desde el principio, pero enseñándoles también los riesgos y peligros que el entorno natural implica, y cuán importante es salir al monte con la máxima seguridad posible.</p><br>
<p>Estas tarjetas federativas infantiles (de 0 a 13 años) y juveniles (de 14 a 17 años) familiares pueden solicitarse por medio de un club, y en breve se facilitará un enlace para que también pueda tramitarse de forma individual a través de nuestra página web.</p><br>
<h4>O bien en la propia <a href='https://fmm.es/federacion-montana/tramites/licencia-paso-a-paso/tipos-y-tarifas-2019'>Federación Madrileña de Montañismo</a></h4>
";
$imagen = "../assets/img/cards/card-montaña/importes-club.jpg";
$rutaPDF = "../assets/documentos/importes-club.pdf";
include '../components/component-card-TIE.php';
?>

<hr class="w-50 mx-auto">

<?php
$tituloExtra = "Marchas";
$titulo = "";
$descripcion = "";
$imagen = "../assets/img/cards/card-montaña/programa-marzo-2026.jpg";
$rutaPDF = "../assets/documentos/programa-marzo-2026.pdf";
include '../components/component-card-TIE-invertida.php';
?>

<?php include '../layout/footer.php'; ?>