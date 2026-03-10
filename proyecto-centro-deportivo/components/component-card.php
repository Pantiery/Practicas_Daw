<!-- Seccion-Card -->
<div class="col-md-4 mb-4">
    <a href="<?= $link ?>" target="_blank" class="card-link">

        <div class="card">

            <div class="card-img-container">
                <img src="<?= $imagen ?>" class="card-img-top">
            </div>

            <div class="card-body d-flex flex-column">

                <h5 class="card-title"><?= $titulo ?></h5>

                <p class="card-text flex-grow-1">
                    <?= $descripcion ?>
                </p>

            </div>

        </div>

    </a>
</div>