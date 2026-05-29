<?php include '../layout/header.php'; ?>

<?php

$tituloHero = "Nosotros";

$subtituloHero = "Más de cuatro décadas fomentando el deporte, la cultura y la convivencia.";

$linkSubtitulo = "#";

$imagenesHero = [
    "../assets/img/heros/hero-principal/fondo_hero.jpg",
    "../assets/img/heros/hero-principal/fondo_hero3.jpg"
];

include '../components/component-hero-secciones.php';

?>

<!-- HISTORIA -->

<section class="container my-5">


<div class="row align-items-center">

    <div class="col-lg-6">

        <img
            src="../assets/img/heros/hero-secciones/ferrocarril2.jpg"
            alt="Historia Centro Delicias"
            class="img-fluid rounded shadow">

    </div>

    <div class="col-lg-6">

        <h2 class="seccion-titulo mb-4">
            Nuestra historia
        </h2>

        <p class="seccion-texto">
            El Centro Deportivo Cultural Delicias Madrid comenzó su actividad en 1979 bajo el nombre de Centro Cultural, Deportivo y Recreativo RENFE de Madrid, continuando la tradición de los grupos empresariales que promovían actividades sociales, deportivas y culturales para los trabajadores del ferrocarril.
        </p>

        <p class="seccion-texto">
            En 1987 fue inscrito oficialmente como Agrupación Deportiva en el Registro de Asociaciones Deportivas de la Comunidad de Madrid. Desde entonces ha evolucionado hasta convertirse en un espacio abierto a toda la ciudadanía, manteniendo siempre sus valores de convivencia, deporte y participación.
        </p>

    </div>

</div>


</section>

<!-- CRONOLOGÍA -->

<section class="container my-5">


<h2 class="seccion-subtitulo text-center mb-5">
    Nuestra evolución
</h2>

<div class="row g-4">

    <div class="col-md-4">

        <div class="card card-historia h-100">

            <div class="card-body text-center">

                <h3 class="anio-historia">1979</h3>

                <p>
                    Nace el Centro Cultural, Deportivo y Recreativo RENFE de Madrid.
                </p>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card card-historia h-100">

            <div class="card-body text-center">

                <h3 class="anio-historia">1987</h3>

                <p>
                    Registro oficial como Agrupación Deportiva en la Comunidad de Madrid.
                </p>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card card-historia h-100">

            <div class="card-body text-center">

                <h3 class="anio-historia">Actualidad</h3>

                <p>
                    Centro abierto a todos los ciudadanos con una amplia oferta deportiva, cultural y recreativa.
                </p>

            </div>

        </div>

    </div>

</div>


</section>

<!-- VALORES -->

<section class="container-fluid fondo-nosotros py-5">


<div class="container">

    <h2 class="seccion-titulo text-center text-white mb-5">
        Nuestros fines
    </h2>

    <div class="row g-4">

        <div class="col-md-6">

            <div class="card card-valor h-100">

                <div class="card-body">

                    <h4>🏃 Deporte y salud</h4>

                    <p>
                        Desarrollar actividades físico-deportivas, recreativas y de ocio que contribuyan al bienestar de nuestros socios.
                    </p>

                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="card card-valor h-100">

                <div class="card-body">

                    <h4>🎯 Promoción deportiva</h4>

                    <p>
                        Fomentar, promocionar y divulgar la práctica deportiva como herramienta de crecimiento personal.
                    </p>

                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="card card-valor h-100">

                <div class="card-body">

                    <h4>📚 Cultura y formación</h4>

                    <p>
                        Ofrecer actividades culturales y educativas que complementen el desarrollo físico de nuestros socios.
                    </p>

                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="card card-valor h-100">

                <div class="card-body">

                    <h4>🤝 Convivencia</h4>

                    <p>
                        Crear un entorno de amistad, respeto y convivencia entre todos los miembros del centro.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>


</section>

<!-- CIERRE -->

<section class="container my-5">


<div class="row align-items-center">

    <div class="col-lg-6">

        <h2 class="seccion-titulo mb-4">
            Un centro para todos
        </h2>

        <p class="seccion-texto">
            Más de cuarenta años después de su creación, el Centro Deportivo Cultural Delicias continúa siendo un punto de encuentro para personas de todas las edades que comparten una misma pasión: disfrutar del deporte, la cultura y la vida social en un entorno cercano y familiar.
        </p>

    </div>

    <div class="col-lg-6">

        <img
            src="../assets/img/heros/hero-secciones/ferrocarril1.jpg"
            alt="Centro Deportivo Delicias"
            class="img-fluid rounded shadow">

    </div>

</div>


</section>

<?php include '../layout/footer.php'; ?>
