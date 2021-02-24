export default function CRUDEmployee() {
  const $updateButton = document.querySelectorAll(".update-button"),
    $clearButton = document.getElementById("clear-button"),
    $firstNameBox = document.getElementById("first-name"),
    $lastNameBox = document.getElementById("last-name"),
    $passwordBox = document.getElementById("password"),
    $passwordConfirmBox = document.getElementById("password-confirmation"),
    $updateConfirmed = document.getElementById("update-confirmed");

  document.addEventListener("click", (e) => {
    $updateButton.forEach((el) => {
      if (e.target === el) {
        let $employeeId = el.parentNode.querySelector('input[name="data-id"]').value,
          $employeeName = el.parentNode.querySelector('input[name="data-name"]').value,
          $employeeLastName = el.parentNode.querySelector('input[name="data-lastname"]').value;

        $firstNameBox.value = $employeeName;
        $lastNameBox.value = $employeeLastName;
        $updateConfirmed.value = $employeeId;

        $passwordBox.removeAttribute("required");
        $passwordConfirmBox.removeAttribute("required");
      }
    });

    if (e.target === $clearButton) {
      $firstNameBox.value = '';
      $lastNameBox.value = '';
      $updateConfirmed.value = '';
      $passwordBox.value = '';
      $passwordConfirmBox.value = '';

      $passwordBox.setAttribute('required', 'required');
      $passwordConfirmBox.setAttribute('required', 'required');
    }
  });
}
