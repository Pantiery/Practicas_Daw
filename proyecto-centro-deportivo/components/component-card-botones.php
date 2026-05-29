<?php
/** @var string $linkBoton1 */
/** @var string $textoBoton1 */
/** @var string $linkBoton2 */
/** @var string $textoBoton2 */
/** @var string $linkBoton3 */
/** @var string $textoBoton3 */
/** @var string $linkBoton4 */
/** @var string $textoBoton4 */
?>

<section class="card-botones">

  <!-- Contenido del hero -->
  <div class="text-center">

    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-3 mt-3">

      <a href="<?php echo $linkBoton1; ?>" class="btn btn-amarillo">
        <?php echo $textoBoton1; ?>
      </a>

      <a href="<?php echo $linkBoton2; ?>" class="boton-hero-secciones btn btn-outline-verde">
        <?php echo $textoBoton2; ?>
      </a>

      <a href="<?php echo $linkBoton3; ?>" class="btn btn-rojo">
        <?php echo $textoBoton3; ?>
      </a>

      <a href="<?php echo $linkBoton4; ?>" class="btn btn-outline-azul">
        <?php echo $textoBoton4; ?>
      </a>

    </div>
  </div>

</section>