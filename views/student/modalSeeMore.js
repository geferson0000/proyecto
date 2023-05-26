import { toggleModal } from "./modal.js";

const $controlSeeMore = document.querySelector(".controlSeeMore");
const $modal = document.querySelector(".modals");
const $modalSeeMore = document.querySelector(".modal-seeMore");
const $modalClose = document.querySelector(".modal-seeMore-close");

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
// 
