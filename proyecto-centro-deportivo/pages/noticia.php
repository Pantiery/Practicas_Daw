<?php

require_once __DIR__ . '/../helpers/noticias.php';
require __DIR__ . '/../config/secciones-config.php';

include __DIR__ . '/../layout/header.php';

$id = $_GET['id'] ?? null;
$origen = $_GET['origen'] ?? 'noticias';

/* CONFIG SECCIONES */

$seccionActual = $SECCIONES[$origen] ?? $SECCIONES["noticias"];

$volver = $seccionActual["pagina"];
$claseBoton = $seccionActual["color"];
$textoSeccion = $seccionActual["nombre"];

/* CARGAR NOTICIAS */

$noticiaActual = obtenerNoticiaPorId($id);

/* SI NO EXISTE */

if(!$noticiaActual){
    echo "<p>Noticia no encontrada</p>";
    include __DIR__ . '/../layout/footer.php';
    exit;
}

/* NOTICIAS RELACIONADAS */

$categoriaActual = $noticiaActual['categoria'];
$relacionadas = obtenerNoticiasRelacionadas($categoriaActual, $id);

?>

<!-- card-noticias -->

<section class="container pagina-noticia">

<a href="<?= $volver ?>" class="<?= $claseBoton ?> mb-4">
← Volver a <?= $textoSeccion ?>
</a>

<h1 class="mb-3">
<?= $noticiaActual['titulo'] ?>
</h1>

<p class="text-muted">
<?= $noticiaActual['fecha'] ?> | <?= $noticiaActual['categoria'] ?>
</p>

<img 
src="../assets/img/noticias/<?= $noticiaActual['imagen'] ?>" 
class="img-fluid rounded mb-4"
>

<p class="lead">
<?= $noticiaActual['texto'] ?>
</p>

<?php if(!empty($relacionadas)): ?>

<hr class="my-5">

<h3 class="mb-4">Noticias relacionadas</h3>

<div class="grid-noticias">

<?php
$categoria = $categoriaActual;

foreach ($relacionadas as $noticia){
    include __DIR__ . '/../components/component-card-noticia.php';
}
?>

</div>

<?php endif; ?>

</section>

<?php include __DIR__ . '/../layout/footer.php'; ?>