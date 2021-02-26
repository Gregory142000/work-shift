export default function headerController() {
  const $linkLogin = document.getElementById('link-logIn'),
        $header = document.querySelector('.Header'),
        $headerLogIn = document.querySelector('.Header__logInBox'),
        $headerMessage = document.querySelector('.Header__message'),
        $headerLogOut = document.querySelector('.Header__logOutBox');

  if(sessionStorage.getItem('session')) {
    $linkLogin.style.display = 'none';
    $headerLogIn.style.display = 'none'

    $header.classList.add('Header--auto-height');

    $headerLogOut.classList.add('Header__logOutBox--active');
  } else{
    $linkLogin.addEventListener('click', (e) => {
      e.preventDefault();
      
      $linkLogin.style.display = 'none';
      $headerLogOut.style.display = 'none';

      $headerMessage.style.display = 'inline-block';
      
      $header.classList.add('Header--auto-height');
      
      $headerLogIn.classList.add('Header__logInBox--active');
    });
  }
}