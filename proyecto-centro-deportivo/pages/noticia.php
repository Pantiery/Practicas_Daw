<?php include __DIR__ . '/../layout/header.php'; ?>

<?php

$id = $_GET['id'] ?? null;
$origen = $_GET['origen'] ?? 'noticias';

/* CONFIG SECCIONES */

require __DIR__ . '/../config/secciones-config.php';

$seccionActual = $SECCIONES[$origen] ?? $SECCIONES["noticias"];

$volver = $seccionActual["pagina"];
$claseBoton = $seccionActual["color"];
$textoSeccion = $seccionActual["nombre"];

/* CARGAR NOTICIAS */

$archivo = __DIR__ . '/../data/noticias.json';
$noticias = json_decode(file_get_contents($archivo), true);

$noticiaActual = null;

foreach($noticias as $n){
    if($n['id'] == $id){
        $noticiaActual = $n;
        break;
    }
}

/* SI NO EXISTE */

if(!$noticiaActual){
    echo "<p>Noticia no encontrada</p>";
    include __DIR__ . '/../layout/footer.php';
    exit;
}

/* NOTICIAS RELACIONADAS */

$categoriaActual = $noticiaActual['categoria'];

$relacionadas = array_filter($noticias, function($n) use ($categoriaActual, $id){
    return $n['categoria'] === $categoriaActual && $n['id'] != $id;
});

usort($relacionadas, function($a, $b){
    return strtotime($b['fecha']) - strtotime($a['fecha']);
});

$relacionadas = array_slice($relacionadas, 0, 3);

?>

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