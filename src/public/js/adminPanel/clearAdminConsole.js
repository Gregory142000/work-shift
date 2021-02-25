export default function clearAdminConsole() {
  const $firstNameBox = document.getElementById("first-name"),
    $lastNameBox = document.getElementById("last-name"),
    $passwordBox = document.getElementById("password"),
    $passwordConfirmBox = document.getElementById("password-confirmation"),
    $updateConfirmed = document.getElementById("update-confirmed");

  $firstNameBox.value = "";
  $lastNameBox.value = "";
  $updateConfirmed.value = "";
  $passwordBox.value = "";
  $passwordConfirmBox.value = "";

  $passwordBox.setAttribute("required", "required");
  $passwordConfirmBox.setAttribute("required", "required");
}
