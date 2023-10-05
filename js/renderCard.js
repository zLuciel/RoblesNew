function renderCardProyect(card) {
    const ElementCard = document.createElement("div");
    ElementCard.innerHTML = `
    <a href="proyecto.php"> <div  class="text-white bg-slider-1 card-proyectos p-4 d-flex flex-column justify-content-between">
          <span style="max-width: max-content;" class="px-4 fs-5 py-2 border border-white">${card.tipo}</span>
          <div >
            <h2 class="name-proyect">${card.title}</h2>
            <p>${card.ubicacion}</p>
            <span class="d-flex gap-2 container-btn-card">
              <button class="color-green w-100  py-2 px-4 text-white">s/.${card.precio}.00</button>
              <button class="w-100">${card.metraje}m2</button>
            </span>
          </div>
        </div> </a>
      `;
      // styled new card
      ElementCard.children[0].children[0].style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6)),url(${card.image})`;
      ElementCard.children[0].children[0].style.backgroundPosition = "center center";
      ElementCard.children[0].children[0].style.backgroundSize = "cover";
      ElementCard.children[0].children[0].style.backgroundRepeat = "no repeat"
  
    return ElementCard;
}

export default renderCardProyect;