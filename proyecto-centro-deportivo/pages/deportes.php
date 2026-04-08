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

<!-- cards -->


<?php
$titulo = "Cafetería";
$descripcion = "La cafetería del club actualmente no se encuentra en funcionamiento como servicio habitual, pero puede alquilarse como espacio independiente para reuniones, celebraciones o pequeños eventos. El espacio dispone de zona de barra, neveras y otros equipamientos básicos que facilitan la organización de actividades en un ambiente cómodo y funcional.";
$imagen = "../assets/img/cards/card-ocio/Cafeteria_provisional.jpeg";
$boton1 = "Reservar";
$boton2 = "Ver disponibilidad";

include '../components/component-card-TIB.php';
?>

<hr class="w-50 mx-auto">

<?php
$titulo = "Salón de actos";
$descripcion = "El salón de actos del club es un espacio amplio y versátil que puede alquilarse para la realización de conferencias, talleres, reuniones o eventos culturales. Cuenta con una superficie aproximada de 120 m² y una capacidad para 80–100 personas, lo que lo convierte en un lugar adecuado para actividades que requieran reunir a un grupo numeroso en un entorno cómodo.";
$imagen = "../assets/img/cards/card-ocio/Salon_de_actos_provisional.jpg";
$boton1 = "Reservar";
$boton2 = "Ver disponibilidad";


include '../components/component-card-TIB-invertida.php';
?>

<hr class="w-50 mx-auto">

<?php
$titulo = "Sala de juntas";
$descripcion = "La sala de juntas es un espacio pensado para reuniones de trabajo, encuentros organizativos o pequeñas presentaciones. Puede alquilarse para realizar reuniones en un ambiente tranquilo y funcional. La sala cuenta con una superficie aproximada de 25 m² y capacidad para 10–12 personas, lo que la hace adecuada para grupos reducidos.";
$imagen = "../assets/img/cards/card-ocio/Sala_de_juntas_provisional.jpg";
$boton1 = "Reservar";
$boton2 = "Ver disponibilidad";


include '../components/component-card-TIB.php';
?>

<hr class="w-50 mx-auto">

<?php
$titulo = "Barbacoa";
$descripcion = "La zona de barbacoa es un espacio exterior pensado para reuniones y encuentros al aire libre. Puede alquilarse para celebraciones, comidas de grupo o actividades sociales en un ambiente relajado. Dispone de una superficie aproximada de 60 m², con espacio para mesas y zona de parrilla, permitiendo reunir cómodamente a 25–30 personas.";
$imagen = "../assets/img/cards/card-ocio/Barbacoa_provisional.jpg";
$boton1 = "Reservar";
$boton2 = "Ver disponibilidad";


include '../components/component-card-TIB-invertida.php';
?>

<?php include '../layout/footer.php'; ?>