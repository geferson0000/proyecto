import reloadStudent from "./reloadStudent.js";
const $controlDelete = document.querySelector(".controlDelete");

$controlDelete.addEventListener("click", async (e) => {
  const $user = document.querySelectorAll(".marked");
  const user = {
    cedula: $user[1].textContent,
    firstName: $user[2].textContent,
    FirstSurname: $user[3].textContent,
    gender: $user[4].textContent,
    birthdate: $user[5].textContent,
  };

  let response = await fetch(
    `http://localhost/proyecto/student/api?cedula=${user.cedula}`,
    {
      method: "DELETE",
    }
  );

  let data = await response.text();
  console.log(data);
  reloadStudent();
});
