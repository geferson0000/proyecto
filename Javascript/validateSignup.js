import validator from './validate.js';

const $formControl = document.querySelectorAll('.form-control');

const $firstName = $formControl[0];
const $lastName = $formControl[1];
const $username = $formControl[2];
const $password = $formControl[3];
const $Rpassword = $formControl[4];

validator($firstName, 'name');
validator($lastName, 'last name');
validator($username, 'username');
validator($password, 'password');
validator($Rpassword, 'password');
