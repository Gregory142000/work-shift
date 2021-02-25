export default function confirmEmployeeDelete(HTMLElement) {
  const $deleteConfirmation = confirm(
    "Are you sure you want to remove this employee from the registry?"
  );

  if ($deleteConfirmation) {
    let urlRedirection = HTMLElement.getAttribute("href");

    window.location.href = urlRedirection;
  } else {
    return false;
  }
}
