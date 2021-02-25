export default function updateEmployee(HTMLElement) {
  const $firstNameBox = document.getElementById("first-name"),
    $lastNameBox = document.getElementById("last-name"),
    $passwordBox = document.getElementById("password"),
    $passwordConfirmBox = document.getElementById("password-confirmation"),
    $updateConfirmed = document.getElementById("update-confirmed");

  let $employeeId = HTMLElement.parentNode.querySelector('input[name="data-id"]').value,
    $employeeName = HTMLElement.parentNode.querySelector('input[name="data-name"]')
      .value,
    $employeeLastName = HTMLElement.parentNode.querySelector(
      'input[name="data-lastname"]'
    ).value;

  $firstNameBox.value = $employeeName;
  $lastNameBox.value = $employeeLastName;
  $updateConfirmed.value = $employeeId;

  $passwordBox.removeAttribute("required");
  $passwordConfirmBox.removeAttribute("required");
}
