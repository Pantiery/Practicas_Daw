<?php

if(!isset($noticia)){
    return;
}

$categoria = $categoria ?? 'noticias';

?>
<a href="../pages/noticia.php?id=<?= htmlspecialchars($noticia['id']) ?>&origen=<?= htmlspecialchars($categoria) ?>" class="card-link">
    

<div class="card card-noticia">

    <div class="card-imagen"
        style="background-image:url('../assets/img/noticias/<?= htmlspecialchars($noticia['imagen']) ?>')">
    </div>

    <div class="card-body">

        <h3 class="noticia-titulo">
            <?= htmlspecialchars($noticia['titulo']) ?>
        </h3>

        <small class="noticia-fecha">
            <?= htmlspecialchars($noticia['fecha']) ?>
        </small>

        <p class="noticia-texto">
            <?= htmlspecialchars(substr($noticia['texto'],0,140)) ?>...
        </p>

    </div>

</div>

</a>