import { toggleModal } from "./modal.js";

const $controlAdd = document.querySelector(".controlAdd");
const $modal = document.querySelector(".modals");
const $modalAdd = document.querySelector(".modal-add");
const $modalAddClose = document.querySelector(".modal-add-close");

$controlAdd.addEventListener("click", (e) => {
  toggleModal($modal, $modalAdd);
})

$modalAddClose.addEventListener("click", (e) => {
  toggleModal($modal, $modalAdd);
})



// const $modalAddForm = document.querySelector(".modal-add-form");

// import validator from "http://localhost/proyecto/views/public/javascript/validate.js";
// let number = 0;
// for (let element of $modalAddForm) {
//   number++;
//   validator(element, "element");
// }
