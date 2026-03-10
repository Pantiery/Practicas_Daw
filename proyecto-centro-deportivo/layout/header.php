<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Metadatos -->
  <meta charset="UTF-8">
  <meta name="keywords" content="HTML, CSS, JavaScrip, Bootstrap">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Titulo -->
  <title>Club Delicias | Centro Deportivo Delicias</title>
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/iconoDeliciasS-removebg-preview.png">
  <!-- Enlace Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Iconos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <!-- Enlace a CSS -->
  <link rel="stylesheet" href="../assets/css/styles.css">
  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Rubik+Dirt&family=Share+Tech+Mono&display=swap"
    rel="stylesheet">
</head>

<body>
  <!-- Barra navegacion -->
  <nav class="navbar navbar-expand-xxl navbar-dark fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler"
        aria-controls="navbar-toggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-toggler">
        <a class="navbar-brand" href="#">
          <img src="../assets/img/iconoDeliciasS-removebg-preview.png" width="150" alt="logo_centro-deportivo">
        </a>
        <ul class="navbar-nav mx-auto text-center gap-5">
          <li class="nav-item">
            <a class="nav-link" href="../public/index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Secciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Medicina China</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Reservas
            </a>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Reservar sala</a></li>
              <li><a class="dropdown-item" href="#">Mis reservas</a></li>
              <li><a class="dropdown-item" href="#">Calendario de actividades</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tienda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://centrodelicias.org/calendario-eventos/" target="blank">Calendario</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Socios
            </a>

            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Iniciar sesión</a></li>
              <li><a class="dropdown-item" href="#">Área privada</a></li>
              <li><a class="dropdown-item" href="#">Hazte socio</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>