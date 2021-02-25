import updateEmployee from './updateEmployee.js';
import confirmEmployeeDelete from './confirmEmployeeDelete.js';
import clearAdminConsole from './clearAdminConsole.js';

export default function CRUDEmployee() {
  const $updateButton = document.querySelectorAll(".update-button"),
    $deleteButton = document.querySelectorAll(".link-button"),
    $clearButton = document.getElementById("clear-button");

  document.addEventListener("click", (e) => {
    $updateButton.forEach((el) => {
      if (e.target === el) {
        updateEmployee(el);
      }
    });

    $deleteButton.forEach((el) => {
      if(e.target === el) {
        e.preventDefault();

        confirmEmployeeDelete(el);
      }
    });

    if (e.target === $clearButton) {
      clearAdminConsole();
    }
  });
}
