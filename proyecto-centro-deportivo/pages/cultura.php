<?php include '../layout/header.php'; ?>

<!-- hero-cultura -->
      <?php

$tituloHero = "Cultura";
$subtituloHero = "“La cultura es el alma de la sociedad.”";

$linkSubtitulo = "#";

$imagenesHero = [
    "../assets/img/heros/hero-montaña/montaña-hero-1.jpg",
    "../assets/img/heros/hero-montaña/montaña-hero-2.jpg",
    "../assets/img/heros/hero-montaña/montaña-hero-3.jpg"
];

include '../components/component-hero-secciones.php';
?>
<!-- seccion cards -->
<!-- compact jazz swing -->
<?php
$imagen = "../assets/img/cards/card-cultura/compactJazz.jpeg ";
$titulo = "Compact Jazz Swing";
$descripcion = "Compact Jazz Swing es una propuesta cultural centrada en el baile y la música swing, pensada para personas que quieren iniciarse o seguir disfrutando de estilos como Solo Jazz, Lindy Hop, Soul Dance y otros ritmos relacionados.

Las clases se desarrollan en un ambiente dinámico y participativo, combinando aprendizaje técnico, ritmo y expresión corporal. Es una actividad ideal tanto para quienes buscan mejorar su coordinación como para quienes quieren formar parte de un grupo con interés por la cultura musical y el baile social.

Horario:
Lunes de 19:00 a 22:00 h.
Martes de 20:00 a 22:00 h.
Miércoles de 19:00 a 22:00 h.
Viernes de 17:00 a 20:00 h.";

include '../components/component-card-cultura.php';
?>
<hr class="w-50 mx-auto">
<!-- coro -->
<?php
$imagen = "../assets/img/cards/card-cultura/coro.jpg";
$titulo = "Coro";
$descripcion = "Voces a Contrapunto es un coro mixto formado por sopranos, contraltos, tenores y bajos, integrado por personas amantes de la música en general y del canto coral en particular.

Su repertorio incluye piezas de distintos géneros y épocas, ofreciendo una experiencia musical variada y enriquecedora para quienes disfrutan cantando en grupo. Además, realizan conciertos a lo largo del año, especialmente en fechas señaladas como junio y diciembre.

El coro está dirigido por el maestro Rosman Alvarado y ensaya en el Centro Delicias, en un entorno pensado para compartir la afición por la música y seguir creciendo vocalmente.

Horario:
Jueves de 19:30 a 21:30 h.";

include '../components/component-card-cultura.php';
?>

<!-- seccion-noticias -->

<?php $categoria = "cultura";

include __DIR__ . '/../components/component-ultimas-noticias.php';?>

<!-- footer -->
<?php include '../layout/footer.php'; ?>