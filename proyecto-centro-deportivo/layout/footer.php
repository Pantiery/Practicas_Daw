<footer class="footer text-light pt-5 pb-3 mt-auto">
    <div class="container seccion-footer">
        <div class="row">
            <!-- Logo y contacto -->
            <div class="col-12 col-md-4">

                <p class="mb-1 seccion-subtitulo">Dirección:</p>
                <p class="mb-2 seccion-texto">Paseo de las Delicias 61<br>Madrid, España</p>
                <p class="mb-1 seccion-subtitulo">Email:</p>
                <p class="mb-2">
                    <a href="mailto:info@centrodelicias.org" class="text-light seccion-texto text-decoration-underline">info@centrodelicias.org</a>
                </p>
                <p class="mb-2 seccion-texto"><i class="bi bi-telephone-fill"> 918 62 49 93</i></p>
                <p class="mb-2 seccion-texto"><i class="bi bi-whatsapp"> 680-647-070 </i></p>
                <img src="../assets/img/logos/logo-propio/logo-delicias.png" alt="Logo" style="max-width:120px;"
                    class="mb-3">
            </div>
            <!-- Enlaces -->
            <div class="col-12 col-md-4">
                <ul class="list-unstyled">
                    <li class="mb-2 seccion-subtitulo"><a href="#" class="text-light">Nosotros</a>
                    </li>
                    <li class="mb-2 seccion-subtitulo"><a href="#" class="text-light">Contacto</a>
                    </li>
                    <li class="mb-2 seccion-subtitulo"><a href="#" class="text-light">Encuesta</a>
                    </li>
                    <li class="mb-2 seccion-subtitulo"><a href="#" class="text-light">Aviso legal</a>
                    </li>
                    <li class="mb-2 seccion-subtitulo">Horario:</li>
                    <li class="mb-2 seccion-texto">
                        Lunes a Viernes: de 09:00 a 22:30 horas
                        Sábados y Domingos: de 08:30 a 14:30 horas
                    </li>
                </ul>
            </div>
            <!-- Redes sociales -->
            <div class="seccion-facebook-contenedor col-12 col-md-4">
                
                <div class=" seccion-facebook d-flex gap-3 mt-2 justify-content-center">
                    <h5 class="seccion-subtitulo">Síguenos en...</h5>
                    <a href="https://www.facebook.com/centrodelicias" target="blank" class="text-light">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="text-light me-3">Política de Privacidad</a>
                    <a href="#" class="text-light me-3">Términos de Servicio</a>
                    <p class="text-light me-3">© 2026 Club Deportivo Centro Delicias.</p>
                    <p class="text-light me-3">Todos los derechos reservados.</p>
                </div>
            </div>
            
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
<button id="btnTop">
    <i class="bi bi-arrow-up"></i>
</button>

<script>

    const btn = document.getElementById("btnTop");

    window.onscroll = function () {

        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            btn.style.display = "block";
        } else {
            btn.style.display = "none";
        }

    };

    btn.onclick = function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    };

</script>
</body>

</html>