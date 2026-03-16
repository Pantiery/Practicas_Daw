<?php

require_once __DIR__ . '/../helpers/noticias.php';

$noticias = cargarNoticias();

?>

<div class="grid-noticias">

<?php if(!empty($noticias)): ?>

    <?php foreach ($noticias as $noticia): ?>
        <?php include __DIR__.'/component-card-noticia.php'; ?>
    <?php endforeach; ?>

<?php else: ?>

<p>No hay noticias todavía.</p>

<?php endif; ?>

</div>