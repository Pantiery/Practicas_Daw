<div class="col-12 col-md-6 col-lg-4 d-flex mb-4">
    <a href="<?= $link ?>" target="_blank" class="card-link w-100">

        <div class="card h-100">

            <div class="card-img-container">
                <img src="<?= $imagen ?>" class="card-img-top">
            </div>

            <div class="card-body d-flex flex-column">

                <h5 class="card-title"><?= $titulo ?></h5>

                <div class="seccion-texto flex-grow-1">

                    <?php if(!empty($contenido)): ?>

                        <?php foreach ($contenido as $bloque): ?>

                            <?php if ($bloque['tipo'] === 'parrafo'): ?>
                                <p><?= $bloque['texto'] ?></p>

                            <?php elseif ($bloque['tipo'] === 'titulo'): ?>
                                <p class="fw-bold mb-1"><?= $bloque['texto'] ?></p>

                            <?php elseif ($bloque['tipo'] === 'lista'): ?>
                                <ul>
                                    <?php foreach ($bloque['items'] as $item): ?>
                                        <li><?= $item ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                        <?php endforeach; ?>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </a>
</div>