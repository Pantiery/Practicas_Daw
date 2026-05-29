<?php

$rutaJson = __DIR__ . '/../data/galeria.json';

$rutas = file_exists($rutaJson)
    ? json_decode(file_get_contents($rutaJson), true)
    : [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $tipo = $_POST['tipo'];

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

    file_put_contents(
        $rutaJson,
        json_encode($rutas, JSON_PRETTY_PRINT)
    );
}

include '../layout/header.php';
?>

<div style="height:240px;"></div>

<section class="container admin-page py-5">

<div class="row justify-content-center">

    <div class="col-lg-8">

        <div class="card card-contacto">

            <div class="card-body p-5">

                <h1 class="text-center mb-4">
                    Publicar galería
                </h1>

                <form method="POST" enctype="multipart/form-data">

                    <div class="mb-4">

                        <label class="form-label fw-bold">
                            Tipo de publicación
                        </label>

                        <select name="tipo" class="form-select">
                            <option value="nueva">Nueva galería</option>
                            <option value="existente">
                                Añadir imagen a galería existente
                            </option>
                        </select>

                    </div>

                    <div class="mb-4">

                        <label class="form-label fw-bold">
                            Título
                        </label>

                        <input
                            type="text"
                            name="titulo"
                            class="form-control">

                    </div>

                    <div class="mb-4">

                        <label class="form-label fw-bold">
                            Descripción
                        </label>

                        <textarea
                            name="descripcion"
                            rows="5"
                            class="form-control"></textarea>

                    </div>

                    <div class="mb-4">

                        <label class="form-label fw-bold">
                            Galería existente
                        </label>

                        <select name="ruta_id" class="form-select">

                            <?php foreach($rutas as $ruta): ?>

                                <option value="<?= $ruta['id'] ?>">
                                    <?= $ruta['titulo'] ?>
                                </option>

                            <?php endforeach; ?>

                        </select>

                    </div>

                    <div class="mb-4">

                        <label class="form-label fw-bold">
                            Imagen
                        </label>

                        <input
                            type="file"
                            name="imagen"
                            class="form-control"
                            required>

                    </div>

                    <div class="text-center">

                        <button
                            type="submit"
                            class="btn btn-naranja px-5">

                            Guardar galería

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>
```

</section>

<?php include '../layout/footer.php'; ?>
