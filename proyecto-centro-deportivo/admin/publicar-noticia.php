<?php

$rutaNoticias = __DIR__ . '/../data/noticias.json';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $fecha = $_POST['fecha'];
    $texto = $_POST['texto'];

    /* cargar noticias existentes */

    if(file_exists($rutaNoticias)){
        $noticias = json_decode(file_get_contents($rutaNoticias), true);
    }else{
        $noticias = [];
    }

    /* generar id */

    $id = count($noticias) > 0 ? max(array_column($noticias,'id')) + 1 : 1;

    /* imagen */

    $nombreImagen = $_FILES['imagen']['name'];
    $rutaDestino = __DIR__ . '/../assets/img/noticias/' . $nombreImagen;

    move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino);

    /* nueva noticia */

    $noticia = [
        "id" => $id,
        "titulo" => $titulo,
        "categoria" => $categoria,
        "fecha" => $fecha,
        "imagen" => $nombreImagen,
        "texto" => $texto
    ];

    $noticias[] = $noticia;

    file_put_contents($rutaNoticias, json_encode($noticias, JSON_PRETTY_PRINT));

}
?>

<form method="POST" enctype="multipart/form-data">

<label>Titulo</label>
<input type="text" name="titulo" required>

<label>Categoria</label>
<select name="categoria">

<option value="montana">Montaña</option>
<option value="deportes">Deportes</option>
<option value="cultura">Cultura</option>
<option value="centro">Centro</option>

</select>

<label>Fecha</label>
<input type="date" name="fecha" required>

<label>Texto</label>
<textarea name="texto" required></textarea>

<label>Imagen</label>
<input type="file" name="imagen" required>

<button type="submit">Publicar noticia</button>

</form>

