<?php

$titulo = $titulo ?? null;
$descripcion = $descripcion ?? null;
$rutas = $rutas ?? [];

if(empty($rutas)){
    return;
}

?>

<section class="seccion-galeria container">

    <?php if($titulo): ?>
        <h2 class="seccion-titulo text-center mb-4">
            <?= htmlspecialchars($titulo) ?>
        </h2>
    <?php endif; ?>

    <?php if($descripcion): ?>
        <p class="seccion-texto text-center mb-5">
            <?= htmlspecialchars($descripcion) ?>
        </p>
    <?php endif; ?>

    <?php include __DIR__ . '/component-galeria.php'; ?>

</section>