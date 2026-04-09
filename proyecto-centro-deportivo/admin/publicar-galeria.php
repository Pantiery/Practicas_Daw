<?php

$rutaJson = __DIR__ . '/../data/galeria.json';

$rutas = file_exists($rutaJson)
    ? json_decode(file_get_contents($rutaJson), true)
    : [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $tipo = $_POST['tipo'];

    /* subir imagen */
    $nombre = $_FILES['imagen']['name'];
    move_uploaded_file(
        $_FILES['imagen']['tmp_name'],
        __DIR__ . '/../assets/img/galeria/' . $nombre
    );

    if($tipo === "nueva"){

        $id = count($rutas) > 0 ? max(array_column($rutas,'id')) + 1 : 1;

        $rutas[] = [
            "id" => $id,
            "titulo" => $_POST['titulo'],
            "descripcion" => $_POST['descripcion'],
            "imagenes" => [$nombre]
        ];

    } else {

        $idRuta = $_POST['ruta_id'];

        foreach($rutas as &$ruta){
            if($ruta['id'] == $idRuta){
                $ruta['imagenes'][] = $nombre;
            }
        }
    }

    file_put_contents($rutaJson, json_encode($rutas, JSON_PRETTY_PRINT));
}
?>

<form method="POST" enctype="multipart/form-data">

<h3>Tipo</h3>
<select name="tipo">
    <option value="nueva">Nueva ruta</option>
    <option value="existente">Añadir a ruta existente</option>
</select>

<h3>Título</h3>
<input type="text" name="titulo">

<h3>Descripción</h3>
<textarea name="descripcion"></textarea>

<h3>Ruta existente</h3>
<select name="ruta_id">
    <?php foreach($rutas as $ruta): ?>
        <option value="<?= $ruta['id'] ?>">
            <?= $ruta['titulo'] ?>
        </option>
    <?php endforeach; ?>
</select>

<h3>Imagen</h3>
<input type="file" name="imagen" required>

<button type="submit">Guardar</button>

</form>