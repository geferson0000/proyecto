const $inputUsername = document.querySelector("#inputUser");
const $inputPassword = document.querySelector("#inputPassword");
const $inputSign = document.querySelector(".inputSign");

function errorCredentials(data) {
  console.log(data)
  $inputUsername.value = '';
  $inputPassword.value = '';
  console.log("Las crendeciales estan malas");
}

const connection =  async (e) => {

  let bodyContent = new FormData();
  bodyContent.append("username", $inputUsername.value);
  bodyContent.append("password", $inputPassword.value);
  
    let response = await fetch("http://localhost/proyecto/sign/login", { 
      method: "POST",
      body: bodyContent,
    });
  
    let data = await response.text();
    data = JSON.parse(data);
  
    //! credentials are valid
    data.password == $inputPassword.value && data.username == $inputUsername.value
      ? location.reload()
      : errorCredentials(data);
}

$inputSign.addEventListener("click", connection)
document.addEventListener("keypress", (event) => {
  if (event.key == "Enter" || event.key === "z") {
    connection();
  }
});




