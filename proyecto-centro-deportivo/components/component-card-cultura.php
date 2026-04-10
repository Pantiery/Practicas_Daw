<section class="container-fluid my-5">
    <div class="row justify-content-center">
        <div class="col-12">

            <div class="card-body p-4">

                <h2 class="seccion-subtitulo text-center mb-4"><?= $titulo ?></h2>

                <div class="w-100 mb-4">
                    <img src="<?= $imagen ?>" alt="<?= $titulo ?>" class="img-fluid w-100 card-cultura-img">
                </div>

                <p class="seccion-texto text-center mb-0" style="white-space: pre-line;">
                    <?= $descripcion ?>
                </p>

            </div>

        </div>
    </div>
</section>