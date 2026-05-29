<?php
/** @var string $titulo */
/** @var string $descripcion */
/** @var string $horario */
/** @var string $precio */
/** @var string $imagen */
?>

<div class="col-12 col-md-6 col-xl-3 d-flex mb-4">

    <div class="card card-servicio h-100">

        <img src="<?= $imagen ?>" class="card-img-top" alt="<?= $titulo ?>">

        <div class="card-body d-flex flex-column">

            <h5 class="card-title text-center mb-3">
                <?= $titulo ?>
            </h5>

            <p class="card-text">
                <?= $descripcion ?>
            </p>

            <hr>

            <p class="mb-1">
                <strong>Horario</strong>
            </p>

            <p class="mb-3">
                <?= $horario ?>
            </p>

            <p class="mb-1">
                <strong>Precio</strong>
            </p>

            <p class="mb-0">
                <?= $precio ?>
            </p>

        </div>

    </div>

</div>