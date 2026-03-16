<?php

require __DIR__ . '/../config/secciones-config.php';
require_once __DIR__ . '/../helpers/noticias.php';

$noticias = cargarNoticias();

/* FILTRAR POR CATEGORIA SI EXISTE */

if(isset($categoria)){
    
    $noticias = array_filter($noticias, function($noticia) use ($categoria){
        return $noticia['categoria'] === $categoria;
    });

}

/* coger las últimas 8 */

$ultimas = array_slice($noticias, 0, 8);

/* color botón */

$seccionActual = $SECCIONES[$categoria ?? "noticias"];
$colorBoton = $seccionActual["color"];

?>

<section class="seccion-noticias container-fluid px-5">

<h2 class="seccion-titulo">Últimas noticias</h2>

<div class="grid-noticias">

<?php if(!empty($ultimas)): ?>

    <?php foreach ($ultimas as $noticia): ?>
        <?php include __DIR__.'/component-card-noticia.php'; ?>
    <?php endforeach; ?>

<?php else: ?>

<p>No hay noticias todavía.</p>

<?php endif; ?>

</div>

<div class="noticias-boton">
    <a href="../pages/noticias.php" class="<?= $colorBoton ?>">
        Ver todas las noticias
    </a>
</div>

</section>