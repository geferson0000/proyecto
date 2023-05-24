const $url = document.querySelector("#url");

let url = $url.textContent + "student/api";


let response = await fetch(url, { 
  method: "GET"
});

let users = await response.text();
users = JSON.parse(users);

let number = 0;
const tableStudent = document.querySelector(".table-student");
for (let user of users) {
  number++;
  let $divUserNumber = document.createElement("div");
  $divUserNumber.textContent = number;
  $divUserNumber.classList.add("table-item");
  tableStudent.appendChild($divUserNumber);

  user = [
    user.cedula,
    user.firstName,
    user.firstSurname,
    user.gender,
    user.birthdate
  ];
  for (let field of user) {
    let $divUser = document.createElement("div");
    $divUser.textContent = field;
    $divUser.classList.add("table-item");
    tableStudent.appendChild($divUser);
  }
}
