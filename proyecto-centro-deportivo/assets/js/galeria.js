document.addEventListener("DOMContentLoaded", function(){

    window.abrirLightbox = function(src){
        const lightbox = document.getElementById('lightbox');
        const img = document.getElementById('lightbox-img');

        img.src = src;
        lightbox.style.display = 'flex';
    }

    const cerrar = document.querySelector('.cerrar');

    if(cerrar){
        cerrar.onclick = function(){
            document.getElementById('lightbox').style.display = 'none';
        }
    }

    // 👉 AQUI VA
    const lightbox = document.getElementById('lightbox');

    if(lightbox){
        lightbox.onclick = function(e){
            if(e.target.id === 'lightbox'){
                this.style.display = 'none';
            }
        }
    }

});