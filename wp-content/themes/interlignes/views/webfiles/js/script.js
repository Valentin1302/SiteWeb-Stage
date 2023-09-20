

// - Burger Menu
// Crée un nouvel élément bouton
let burgerIcon = document.createElement("button");

// Sélectionne l'élément <nav> existant dans le document
let nav = document.querySelector("nav");

// Sélectionne l'élément <ul> existant dans le document
let ul = document.querySelector("ul");

// Ajoute un gestionnaire d'événements pour le redimensionnement de la fenêtre
window.addEventListener("resize", () => {
    // Vérifie si la largeur de la fenêtre est inférieure ou égale à 1025 pixels
    if (window.innerWidth <= 1025) {
        // Vérifie si l'élément burgerIcon n'est pas déjà présent dans l'élément nav
        if (!nav.contains(burgerIcon)) {
            // Ajoute l'élément burgerIcon à l'élément nav
            nav.appendChild(burgerIcon);
        } else {
            // Aucune action n'est nécessaire si burgerIcon est déjà présent dans nav
        }
    } else {
        // Supprime l'élément burgerIcon de nav si la largeur de la fenêtre est supérieure à 1025 pixels
        burgerIcon.remove();
    }
});

// Ajoute un gestionnaire d'événements pour le chargement de la page
window.addEventListener("load", () => {
    // Vérifie si la largeur de la fenêtre est inférieure ou égale à 1025 pixels
    // et si burgerIcon n'est pas déjà présent dans nav
    if (window.innerWidth <= 1025) {
        // Vérifie si l'élément burgerIcon n'est pas déjà présent dans l'élément nav
        if (!nav.contains(burgerIcon)) {
            // Ajoute l'élément burgerIcon à l'élément nav
            nav.appendChild(burgerIcon);
        } else {
            // Aucune action n'est nécessaire si burgerIcon est déjà présent dans nav
        }
    } else {
        // Supprime l'élément burgerIcon de nav si la largeur de la fenêtre est supérieure à 1025 pixels
        burgerIcon.remove();
    }
});

// Ajoute un gestionnaire d'événements pour le clic sur burgerIcon
burgerIcon.addEventListener("click", () => {
    // Ajoute ou supprime la classe "open" de l'élément ul
    ul.classList.toggle("open");
    burgerIcon.classList.toggle("active");
})







let slide = document.querySelectorAll(".imgslider");
let numero = 0;
let intervalID;

function startSlideShow() {
  intervalID = setInterval(autoChangeSlide, 5000);
}

function stopSlideShow() {
  clearInterval(intervalID);
}

function changeSlide(sens) {
  if (slide.length === 0) {
    // Si le tableau slide est vide (aucun élément avec la classe "imgslider" trouvé)
    return;
  }

  slide[numero].setAttribute("id", ""); // Supprime l'attribut "id" de l'image actuelle
  numero += sens;
  if (numero === -1) {
    numero = slide.length - 1;
  } else if (numero === slide.length) {
    numero = 0;
  }
  slide[numero].setAttribute("id", "showing"); // Ajoute l'attribut "id" "showing" à l'image actuelle pour l'afficher
}

function autoChangeSlide() {
  changeSlide(1); // Appelle la fonction changeSlide avec un sens de 1 pour passer à l'image suivante
}

// Appeler startSlideShow pour démarrer le carrousel lorsque la page est chargée
document.addEventListener("DOMContentLoaded", () => {
  startSlideShow();
});

// Lorsque vous quittez la page principale, arrêtez l'intervalle pour éviter des problèmes potentiels.
window.addEventListener("beforeunload", () => {
  stopSlideShow();
});

let catégoriesSubMenu = document.querySelectorAll("a[href='#']");
catégoriesSubMenu.forEach((element) =>{
  console.log (element)});


  