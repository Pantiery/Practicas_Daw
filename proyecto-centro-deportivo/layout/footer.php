<footer class="bg-dark text-light pt-5 pb-3 mt-auto">
    <div class="container">
        <div class="row">
            <!-- Logo y contacto -->
            <div class="col-12 col-md-4">

                <p class="mb-1 seccion-subtitulo">Dirección:</p>
                <p class="mb-2 seccion-texto">Paseo de las Delicias 61<br>Madrid, España</p>
                <p class="mb-1 seccion-subtitulo">Email:</p>
                <p class="mb-2 "><a href="mailto:info@centrodelicias.org"
                        class="text-decoration-none text-light seccion-texto">info@centrodelicias.org</a></p>
                <p class="mb-2 seccion-texto"><i class="bi bi-telephone-fill"> 918 62 49 93</i></p>
                <p class="mb-2 seccion-texto"><i class="bi bi-whatsapp"> 680-647-070 </i></p>
                <img src="../assets/img/iconoDeliciasS-removebg-preview.png" alt="Logo" style="max-width:120px;"
                    class="mb-3">
            </div>
            <!-- Enlaces -->
            <div class="col-12 col-md-4">
                <ul class="list-unstyled">
                    <li class="mb-2 seccion-subtitulo"><a href="#" class="text-decoration-none text-light">Nosotros</a>
                    </li>
                    <li class="mb-2 seccion-subtitulo"><a href="#" class="text-decoration-none text-light">Contacto</a>
                    </li>
                    <li class="mb-2 seccion-subtitulo">Horario:</li>
                    <li class="mb-2 seccion-texto">
                        Lunes a Viernes: de 09:00 a 22:30 horas
                        Sábados y Domingos: de 08:30 a 14:30 horas
                    </li>
                </ul>
            </div>
            <!-- Redes sociales -->
            <div class="col-md-4">
                <h5 class="seccion-subtitulo">Síguenos en...</h5>
                <div class="d-flex gap-3 mt-2">
                    <a href="https://www.facebook.com/centrodelicias" target="blank" class="text-light">
                        <i class="bi bi-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
        <hr class="border-secondary">
        <!-- Parte inferior -->
        <div
            class="d-flex flex-column flex-md-row justify-content-between text-center text-md-start small seccion-subtitulo">
            <div>
                © 2024 Your Website. All rights reserved.
            </div>

            <div>
                <a href="#" class="text-light text-decoration-none me-3">Política de Privacidad</a>
                <a href="#" class="text-light text-decoration-none">Términos de Servicio</a>
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