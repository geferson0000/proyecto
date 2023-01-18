import validator from "./validate.js";

const $inputUsername = document.querySelector(".username");
const $inputPassword = document.querySelector(".password");

validator($inputUsername, "username");
validator($inputPassword, "password");

