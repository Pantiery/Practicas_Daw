document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll('.card-instalacion').forEach(card => {

        const imagenes = JSON.parse(card.dataset.imagenes);
        let i = 0;

        const img = card.querySelector('.fade-img');

        if (!imagenes || imagenes.length <= 1) return;

        // 🔥 delay inicial aleatorio
        const delayInicial = Math.random() * 3000;

        setTimeout(() => {

            setInterval(() => {

                img.classList.add('fade-out');

                setTimeout(() => {
                    i = (i + 1) % imagenes.length;
                    img.src = imagenes[i];
                    img.classList.remove('fade-out');
                }, 1200);

            }, 10000);

        }, delayInicial);

    });

});