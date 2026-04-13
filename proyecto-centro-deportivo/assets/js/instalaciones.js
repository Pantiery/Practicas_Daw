document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll('.card-instalacion').forEach(card => {

        const imagenes = JSON.parse(card.dataset.imagenes);
        let i = 0;

        const img = card.querySelector('.fade-img');
        const btnNext = card.querySelector('.next');
        const btnPrev = card.querySelector('.prev');

        // si no hay imágenes o solo 1 → no hacemos nada
        if (!imagenes || imagenes.length <= 1) return;

        // 🔥 PRELOAD
        imagenes.forEach(src => {
            const preloadImg = new Image();
            preloadImg.src = src;
        });

        let intervalo;

        // 🔄 cambiar imagen
        const cambiarImagen = (nuevoIndex) => {

            img.classList.add('fade-out');

            setTimeout(() => {
                i = (nuevoIndex + imagenes.length) % imagenes.length;
                img.src = imagenes[i];
                img.classList.remove('fade-out');
            }, 1200);

        };

        // ▶️ auto
        const iniciarAuto = () => {
            intervalo = setInterval(() => {
                cambiarImagen(i + 1);
            }, 10000);
        };

        // 🔁 reiniciar auto (cuando usuario interactúa)
        const reiniciarAuto = () => {
            clearInterval(intervalo);
            iniciarAuto();
        };

        // 🎮 controles manuales (solo si existen)
        if (btnNext && btnPrev) {

            btnNext.addEventListener('click', (e) => {
                e.preventDefault();
                cambiarImagen(i + 1);
                reiniciarAuto();
            });

            btnPrev.addEventListener('click', (e) => {
                e.preventDefault();
                cambiarImagen(i - 1);
                reiniciarAuto();
            });

        }

        // ⏱ delay inicial aleatorio
        setTimeout(() => {
            iniciarAuto();
        }, Math.random() * 3000);

    });

});