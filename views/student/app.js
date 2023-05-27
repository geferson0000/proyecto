const $modalAddForm = document.querySelector(".modal-add-form");

const $modalAddFormInput = document.querySelectorAll(".modal-add-form-input");

const $url = document.querySelector("#url");

$modalAddForm.addEventListener("submit", async (e) => {
  e.preventDefault();
  let bodyContent = new FormData();
  for (let index in $modalAddFormInput) {
    bodyContent.append($modalAddFormInput[index].name, $modalAddFormInput[index].value);
  }
  bodyContent.append("gender", 1);
  let url = $url.textContent + "student/api";
  let response = await fetch(url, {
    method: "POST",
    body: bodyContent,
  });

  let data = await response.text();
  data = JSON.parse(data);
  console.log(data);
  location.reload();
});
