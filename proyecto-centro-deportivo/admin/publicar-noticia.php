<?php include '../layout/header.php'; ?>

<div style="height:240px;"></div>

<?php

$rutaNoticias = __DIR__ . '/../data/noticias.json';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $fecha = $_POST['fecha'];
    $texto = $_POST['texto'];

    if(file_exists($rutaNoticias)){
        $noticias = json_decode(file_get_contents($rutaNoticias), true);
    }else{
        $noticias = [];
    }

    $id = count($noticias) > 0
        ? max(array_column($noticias,'id')) + 1
        : 1;

    $nombreImagen = $_FILES['imagen']['name'];

    $rutaDestino =
        __DIR__ . '/../assets/img/noticias/' . $nombreImagen;

    move_uploaded_file(
        $_FILES['imagen']['tmp_name'],
        $rutaDestino
    );

    $noticia = [
        "id" => $id,
        "titulo" => $titulo,
        "categoria" => $categoria,
        "fecha" => $fecha,
        "imagen" => $nombreImagen,
        "texto" => $texto
    ];

    $noticias[] = $noticia;

    file_put_contents(
        $rutaNoticias,
        json_encode($noticias, JSON_PRETTY_PRINT)
    );

    $mensaje = "Noticia publicada correctamente.";
}
?>

<section class="container admin-page py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow-sm border-0">

                <div class="card-body p-5">

                    <h1 class="text-center mb-4">
                        Publicar noticia
                    </h1>

                    <p class="text-center text-muted mb-5">
                        Añade nuevas noticias para la sección de actualidad del centro.
                    </p>

                    <?php if(isset($mensaje)): ?>

                        <div class="alert alert-success">
                            <?= $mensaje ?>
                        </div>

                    <?php endif; ?>

                    <form method="POST" enctype="multipart/form-data">

                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                Título
                            </label>

                            <input
                                type="text"
                                name="titulo"
                                class="form-control"
                                required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                Categoría
                            </label>

                            <select
                                name="categoria"
                                class="form-select">

                                <option value="montana">
                                    Montaña
                                </option>

                                <option value="deportes">
                                    Deportes
                                </option>

                                <option value="cultura">
                                    Cultura
                                </option>

                                <option value="centro">
                                    Centro
                                </option>

                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                Fecha
                            </label>

                            <input
                                type="date"
                                name="fecha"
                                class="form-control"
                                required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                Contenido de la noticia
                            </label>

                            <textarea
                                name="texto"
                                rows="8"
                                class="form-control"
                                required></textarea>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                Imagen destacada
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

                                Publicar noticia

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<?php include '../layout/footer.php'; ?>