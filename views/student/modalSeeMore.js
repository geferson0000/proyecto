const $controlSeeMore = document.querySelector(".controlSeeMore");
const $modal = document.querySelector(".modals");
const $modalSeeMore = document.querySelector(".modal-seeMore");
const $modalClose = document.querySelector(".modal-seeMore-close");

function toggleModal(modal, add) {
  if (modal.style.display != 'flex') {
    modal.style.display = 'flex';
    setTimeout(() => {
      modal.style.opacity = 1;
      add.style.opacity = 1;
    }, 1);

  } else {
    add.style.opacity = 0;
    modal.style.opacity = 0;
    setTimeout(() => {
      modal.style.display = 'none';
    }, 1000);
  }
}

$controlSeeMore.addEventListener("click", (e) => {
  toggleModal($modal, $modalSeeMore);
})

$modalClose.addEventListener("click", (e) => {
  toggleModal($modal, $modalSeeMore);
})



// const $modalSeeMoreForm = document.querySelector(".modal-add-form");

// import validator from "http://localhost/proyecto/views/public/javascript/validate.js";
// let number = 0;
// for (let element of $modalSeeMoreForm) {
//   number++;
//   validator(element, "element");
// }
