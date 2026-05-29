<?php include '../layout/header.php'; ?>

<?php

$tituloHero = "Métodos de Pago";

$subtituloHero = "Información sobre las formas de pago aceptadas en el Centro Deportivo Cultural Delicias.";

$linkSubtitulo = "#";

$imagenesHero = [
    "../assets/img/heros/hero-principal/fondo_hero.jpg",
    "../assets/img/heros/hero-principal/fondo_hero3.jpg"
];

include '../components/component-hero-secciones.php';

?>

<section class="container my-5">


<div class="card card-contacto">

    <div class="card-body p-5">

        <h2 class="seccion-subtitulo mb-4">
            Formas de pago aceptadas
        </h2>

        <p class="seccion-texto">
            El Centro Deportivo Cultural Delicias ofrece diferentes opciones de pago para facilitar la contratación de actividades, reservas e inscripciones.
        </p>

        <p class="seccion-texto">
            Actualmente se aceptan pagos mediante:
        </p>

        <ul class="seccion-texto">
            <li>Tarjetas VISA.</li>
            <li>Tarjetas Mastercard.</li>
            <li>Pagos presenciales en las instalaciones del centro (según el servicio contratado).</li>
        </ul>

        <hr>

        <h2 class="seccion-subtitulo mb-4">
            Seguridad en los pagos
        </h2>

        <p class="seccion-texto">
            Todas las operaciones de pago se realizan mediante sistemas seguros que garantizan la protección de la información proporcionada por los usuarios.
        </p>

        <p class="seccion-texto">
            El Centro Deportivo Cultural Delicias no almacena datos bancarios completos de las tarjetas utilizadas en los procesos de pago.
        </p>

        <hr>

        <h2 class="seccion-subtitulo mb-4">
            Confirmación de pago
        </h2>

        <p class="seccion-texto">
            Una vez completada la operación, el usuario recibirá la correspondiente confirmación de la reserva, inscripción o servicio contratado.
        </p>

        <p class="seccion-texto">
            En caso de incidencia durante el proceso de pago, se recomienda contactar con el centro para verificar el estado de la operación.
        </p>

        <hr>

        <h2 class="seccion-subtitulo mb-4">
            Contacto
        </h2>

        <p class="seccion-texto">
            Para cualquier consulta relacionada con pagos, facturación o reservas puede ponerse en contacto con nuestro equipo de atención al usuario.
        </p>

        <p class="fw-bold">
            info@centrodelicias.org
        </p>

    </div>

</div>


</section>

<?php include '../layout/footer.php'; ?>
