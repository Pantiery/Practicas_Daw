<?php

$rutas = $rutas ?? [];
$tituloGaleria = $tituloGaleria ?? null;

if (empty($rutas)) {
    return;
}

?>

<?php if($tituloGaleria): ?>
    <h2 class="seccion-titulo text-center mb-5">
        <?= htmlspecialchars($tituloGaleria) ?>
    </h2>
<?php endif; ?>



   <?php foreach ($rutas as $ruta): ?>

    <div class="mb-5">
        
        <h3 class="text-center"><?= htmlspecialchars($ruta['titulo']) ?></h3>
        <p class="text-center"><?= htmlspecialchars($ruta['descripcion']) ?></p>

        <div class="galeria-grid">

            <?php foreach ($ruta['imagenes'] as $img): ?>

                <div class="galeria-item">
                    <img 
                    src="<?= BASE_URL ?>assets/img/galeria/<?= htmlspecialchars($img) ?>" 
                    onclick="abrirLightbox(this.src)"
                    >
                </div>

            <?php endforeach; ?>

        </div>

    </div>

<?php endforeach; ?>



<div id="lightbox" class="lightbox">
    <span class="cerrar">&times;</span>
    <img id="lightbox-img">
</div>