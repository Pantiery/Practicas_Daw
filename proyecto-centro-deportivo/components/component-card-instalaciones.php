<div class="col-12 col-md-6 col-lg-3 d-flex mb-4">
    

        <div class="card h-100 card-instalacion"
             data-imagenes='<?= json_encode($imagenes) ?>'>

            <div class="card-img-container">
                <img src="<?= $imagenes[0] ?>" class="card-img-top fade-img">
            </div>

            <div class="card-body d-flex flex-column">

                <h5 class="card-title"><?= $titulo ?></h5>

                <p class="seccion-texto flex-grow-1">
                    <?= $descripcion ?>
                </p>

            </div>

        </div>

</div>