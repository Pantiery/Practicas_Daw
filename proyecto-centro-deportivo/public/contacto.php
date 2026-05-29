<?php include '../layout/header.php'; ?>

<?php

$tituloHero = "Contacto";

$subtituloHero = "Estamos a tu disposición para resolver cualquier duda o consulta.";

$linkSubtitulo = "#";

$imagenesHero = [
    "../assets/img/heros/hero-principal/fondo_hero.jpg",
    "../assets/img/heros/hero-principal/fondo_hero3.jpg"
];

include '../components/component-hero-secciones.php';

?>

<!-- PRESENTACIÓN -->

<section class="container-fluid px-5 py-5">


<div class="row align-items-center">

    <div class="col-lg-6 mb-4">

        <img
            src="../assets/img/contacto/contacto.png"
            alt="Contacto"
            class="img-fluid rounded shadow">

    </div>

    <div class="col-lg-6">

        <h2 class="seccion-titulo mb-4">
            Estamos para ayudarte
        </h2>

        <p class="seccion-texto">
            Nuestro equipo está disponible para resolver cualquier duda relacionada con actividades, reservas, instalaciones y servicios del club.
        </p>

        <p class="seccion-texto">
            Puedes visitarnos presencialmente, llamarnos por teléfono o enviarnos un mensaje a través del formulario de contacto.
        </p>

    </div>

</div>


</section>

<!-- INFORMACIÓN DE CONTACTO -->

<section class="container-fluid px-5 my-5">


<h2 class="seccion-subtitulo text-center mb-5">
    Información de contacto
</h2>

<div class="row g-4">

    <div class="col-md-4">

        <div class="card card-contacto h-100 text-center">

            <div class="card-body">

                <i class="bi bi-geo-alt-fill icono-contacto"></i>

                <h4>Dirección</h4>

                <p>
                    Centro Deportivo Delicias<br>
                    Paseo de las Delicias, Madrid
                </p>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card card-contacto h-100 text-center">

            <div class="card-body">

                <i class="bi bi-telephone-fill icono-contacto"></i>

                <h4>Teléfono</h4>

                <p>+34 912 345 678</p>

                <h5>Email</h5>

                <p>info@centrodelicias.es</p>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card card-contacto h-100 text-center">

            <div class="card-body">

                <i class="bi bi-clock-fill icono-contacto"></i>

                <h4>Atención al socio</h4>

                <p>
                    Lunes a Viernes<br>
                    09:00 - 21:00
                </p>

            </div>

        </div>

    </div>

</div>


</section>

<!-- FORMULARIO -->

<section class="container my-5">


<div class="row justify-content-center">

    <div class="col-lg-8">

        <div class="card card-contacto">

            <div class="card-body p-5">

                <h2 class="text-center mb-4">
                    Envíanos un mensaje
                </h2>

                <form action="../pages/mensaje-enviado.php" method="post">

                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Asunto</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mensaje</label>
                        <textarea class="form-control" rows="6"></textarea>
                    </div>

                    <div class="text-center">

                        <button type="submit" class="btn btn-naranja px-5">
                            Enviar mensaje
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


</section>

<!-- HORARIOS -->

<section class="container my-5">


<h2 class="seccion-subtitulo text-center mb-4">
    Horarios del centro
</h2>

<div class="card card-contacto">

    <div class="card-body text-center">

        <p><strong>Lunes a Viernes:</strong> 07:00 - 23:00</p>

        <p><strong>Sábados:</strong> 08:00 - 22:00</p>

        <p><strong>Domingos y Festivos:</strong> 09:00 - 21:00</p>

    </div>

</div>


</section>

<!-- MAPA -->

<section class="container-fluid px-5 my-5">


<h2 class="seccion-subtitulo text-center mb-4">
    Cómo llegar
</h2>

<div class="ratio ratio-21x9 shadow rounded overflow-hidden">

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.4852733124617!2d-3.6928814233052765!3d40.39809927144258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42263a2ac01d47%3A0x3efb6991cc9321b2!2sCentro%20Deportivo%20Cultural%20Delicias!5e0!3m2!1ses!2ses!4v1780048026896!5m2!1ses!2ses"
        style="border:0;"
        allowfullscreen=""
        loading="lazy">
    </iframe>

</div>


</section>

<!-- REDES -->

<section class="container text-center my-5">


<h2 class="seccion-subtitulo mb-5">
    Síguenos
</h2>

<div class="d-flex justify-content-center gap-5">

    <a href="https://www.facebook.com/centrodelicias" target="_blank" class="icono-red">
        <i class="bi bi-facebook"></i>
    </a>

</div>


</section>

<?php include '../layout/footer.php'; ?>
