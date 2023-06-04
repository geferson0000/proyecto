import { loadStudent } from "./loadStudent.js";
export default function reloadStudent() {
  const $tableStudent = document.querySelector(".table-student");

  const $tableItems = document.querySelectorAll(".table-item");

  for (let item of $tableItems) {
    $tableStudent.removeChild(item);
  }
  loadStudent();
}
