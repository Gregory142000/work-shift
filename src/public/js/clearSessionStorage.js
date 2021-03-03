export default function clearSessionStorage() {
  const $buttonLogout = document.getElementById('button-logout');

  $buttonLogout.addEventListener('click', () => {
    sessionStorage.clear('session');
  })
}