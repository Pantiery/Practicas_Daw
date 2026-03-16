<section class="hero-section py-5">
    <div class="container">
        <div class="row align-items-center g-4">

            <!-- Imagen -->
            <div class="col-12 col-md-6">
                <div class="hero-img-wrapper">
                    <img src="<?= $imagen ?>" alt="<?= $titulo ?>" class="img-fluid rounded">
                </div>
            </div>

            <!-- Texto -->
            <div class="col-12 col-md-6 text-md-end ms-md-auto">
                <h1 class="hero-title"><?= $titulo ?></h1>

                <p class="hero-text mt-3">
                    <?= $descripcion ?>
                </p>

        </div>
    </div>
</section>