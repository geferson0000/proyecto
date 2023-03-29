// import validator from "../public/Javascript/validate.js";

const $inputUsername = document.querySelector("#inputUser");
const $inputPassword = document.querySelector("#inputPassword");
const $inputSubmit = document.querySelector(".inputSign");
const $errorDiv = document.querySelector(".errorDiv");
const $errorRequired = document.querySelector(".errorRequired");

function cleanInputs(){
  $inputUsername.value = '';
  $inputPassword.value = '';
}

function erroRequired() {
  cleanInputs();
  $errorDiv.style.display = "none";
  console.log("Llos campos son requeridos");
  $errorRequired.style.display = "flex";
}

function errorCredentials(data) {
  console.log(data)
  cleanInputs();
  console.log("Las crendeciales estan malas");
  $errorDiv.style.display = "flex";
}

$inputSubmit.addEventListener("click", async (e) => {
  let headersList = {
    "Accept": "*/*",
    "User-Agent": "Thunder Client (https://www.thunderclient.com)"
  } 
  
  let bodyContent = new FormData();
  bodyContent.append("username", $inputUsername.value);
  bodyContent.append("password", $inputPassword.value);

  if ($inputUsername.value.length > 4 && $inputPassword.value.length) {  
    let response = await fetch("http://localhost/proyecto/sign/login", { 
      method: "POST",
      body: bodyContent,
      headers: headersList
    });

    let data = await response.text();
    data = JSON.parse(data);
    
    $errorRequired.style.display = "none";
    data.password == $inputPassword.value && data.username == $inputUsername.value
      ? location.reload()
      : errorCredentials(data);
    
  } else {
    erroRequired();
  }

})



