const $controlAdd = document.querySelector(".controlAdd");
const $modal = document.querySelector(".modals");
const $modalAdd = document.querySelector(".modal-add");
const $modalAddClose = document.querySelector(".modal-add-close");

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

$controlAdd.addEventListener("click", (e) => {
  toggleModal($modal, $modalAdd);
})

$modalAddClose.addEventListener("click", (e) => {
  toggleModal($modal, $modalAdd);
})



const $modalAddForm = document.querySelector(".modal-add-form");

import validator from "http://localhost/proyecto/views/public/javascript/validate.js";
let number = 0;
for (let element of $modalAddForm) {
  number++;
  validator(element, "element");
}
