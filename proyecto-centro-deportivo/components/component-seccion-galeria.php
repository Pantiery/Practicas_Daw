<?php

$tituloGaleria = $tituloGaleria ?? null;
$descripcionGaleria = $descripcionGaleria ?? null;
$rutas = $rutas ?? [];

if(empty($rutas)){
    return;
}

?>

<section class="seccion-galeria container-fluid">

    <?php if($tituloGaleria): ?>
        <h2 class="seccion-titulo text-center mb-4">
            <?= htmlspecialchars($tituloGaleria) ?>
        </h2>
    <?php endif; ?>

    <?php if($descripcionGaleria): ?>
        <p class="seccion-texto text-center mb-5">
            <?= htmlspecialchars($descripcionGaleria) ?>
        </p>
    <?php endif; ?>

    <?php include __DIR__ . '/component-galeria.php'; ?>

</section>