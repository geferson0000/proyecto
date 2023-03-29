import validator from "../public/Javascript/validate.js";

const $inputUsername = document.querySelector("#inputUser");
const $inputPassword = document.querySelector("#inputPassword");
const $inputSubmit = document.querySelector(".inputSign");

validator($inputUsername, "username");
validator($inputPassword, "password");

// ----------------------------------------

let data = $inputSubmit.addEventListener("click", async (e) => {

  let username = $inputUsername.value;
  let password = $inputPassword.value;
  let headersList = {
    "Accept": "*/*",
    "User-Agent": "Thunder Client (https://www.thunderclient.com)"
   } 
  let bodyContent = new FormData();
  bodyContent.append("username", username);
  bodyContent.append("password", password);
   
  let response = await fetch("http://localhost/proyecto/sign/login", { 
     method: "POST",
     body: bodyContent,
     headers: headersList
  });
   
  let data = await response.text();
  return JSON.parse(data);
})



