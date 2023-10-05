const btnAll = document.querySelectorAll(".btn-galery-view");

const optionGalery = {
  fotos: document.getElementById("fotos-swiper"),
  videos: document.getElementById("video-proyect"),
};

btnAll.forEach((btn) => {
    //logica botones
  btn.addEventListener("click", () => {
    btnAll.forEach((btndesactive) =>
      btndesactive.classList.remove("active-option-galery")
    );
    btn.classList.add("active-option-galery");
    //logica mostrar tipo de galerya segun opciones
    const contenido = btn.textContent.trim().toLowerCase();
    if (contenido) {
      let valoresGalery = Object.values(optionGalery);
      valoresGalery.forEach((option) =>
        option.classList.remove("active-view-galery")
      );
      optionGalery[contenido].classList.add("active-view-galery");
    }
  });
});

/**video play */
const btnPlay = document.getElementById("play-video-galery");
const videoYoutube = document.getElementById("video-youtube-galery");

btnPlay.addEventListener("click",(e)=>{
 videoYoutube.classList.remove("desactive-youtube");
    if (videoYoutube && videoYoutube.contentWindow) {
        // Enviamos el comando para reproducir el video
        videoYoutube.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
    }
});