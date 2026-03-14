<?php include __DIR__ . '/../layout/header.php'; ?>

<?php

$id = $_GET['id'] ?? null;
$origen = $_GET['origen'] ?? 'noticias';

switch($origen){

    case "montana":
        $volver = "../pages/montaña.php";
        $claseBoton = "btn btn-rojo";
        break;

    case "cultura":
        $volver = "../pages/cultura.php";
        $claseBoton = "btn btn-outline-azul";
        break;

    case "deportes":
        $volver = "../pages/deportes.php";
        $claseBoton = "btn btn-amarillo";
        break;

    case "centro":
        $volver = "../public/index.php";
        $claseBoton = "btn btn-naranja";
        break;

    default:
        $volver = "../pages/noticias.php";
        $claseBoton = "btn btn-outline-dark";
}

$archivo = __DIR__ . '/../data/noticias.json';
$noticias = json_decode(file_get_contents($archivo), true);

$noticiaActual = null;

foreach($noticias as $n){
    if($n['id'] == $id){
        $noticiaActual = $n;
        break;
    }
}

if(!$noticiaActual){
    echo "<p>Noticia no encontrada</p>";
    include __DIR__ . '/../layout/footer.php';
    exit;
}

?>

<section class="container pagina-noticia">

<a href="<?= $volver ?>" class="<?= $claseBoton ?> mb-4">
← Volver a <?= ucfirst($origen) ?>
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

</section>

<?php include __DIR__ . '/../layout/footer.php'; ?>