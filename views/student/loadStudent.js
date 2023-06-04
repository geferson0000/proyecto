export async function loadStudent() {
  const $url = document.querySelector("#url");

  let url = $url.textContent + "student/api";

  let response = await fetch(url, {
    method: "GET",
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
    $divUserNumber.classList.add(`number-${number}`);
    tableStudent.appendChild($divUserNumber);

    user = [
      user.cedula,
      user.firstName,
      user.firstSurname,
      user.gender,
      user.birthdate,
    ];

    for (let field of user) {
      let $divUser = document.createElement("div");
      $divUser.textContent = field;
      $divUser.classList.add("table-item");
      $divUser.classList.add(`number-${number}`);
      tableStudent.appendChild($divUser);
    }

    let $divUserAllNumber = document.querySelectorAll(`.number-${number}`);
    for (let $divUser of $divUserAllNumber) {
      $divUser.addEventListener("mouseover", (e) => {
        for (let item of $divUserAllNumber) {
          item.style.backgroundColor = "#ccc";
        }
      });

      $divUser.addEventListener("mouseout", (e) => {
        for (let item of $divUserAllNumber) {
          item.style.backgroundColor = "#fff";
        }
      });

      $divUser.addEventListener("click", (e) => {
        for (let item of $divUserAllNumber) {
          let $fieldTable = document.querySelectorAll(".table-item");
          for (let field of $fieldTable) {
            if (field.classList[1] !== item.classList[1]) {
              field.classList.remove("marked");
            }
          }

          if (!item.classList.contains("marked")) {
            item.classList.add("marked");
          } else {
            item.classList.remove("marked");
          }
        }
      });
    }
  }
}

loadStudent();
