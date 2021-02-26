export default function $buttonSelectWork() {
  const $employeeLogin = document.getElementById('employee-login'),
        $idEmployee = document.getElementById('id-employee'),
        $reseatButton = document.getElementById('reseat-button'),
        $buttons = document.querySelectorAll('.button[disabled]'),
        $selectButton = document.querySelectorAll('.button-select'),
        sessionId = $employeeLogin.getAttribute('value');
  
  if(sessionId !== ''){
    sessionStorage.setItem('session', sessionId);

    $idEmployee.value = sessionStorage.getItem('session');

    $buttons.forEach((el) => el.removeAttribute('disabled'));

    document.addEventListener('click', (e) => {
      $selectButton.forEach((el) => {
        if(e.target === el) {
          e.preventDefault();

          el.setAttribute('disabled', 'disabled');
          el.parentNode.querySelector('input[type=hidden]').value = 'TRUE';
        }
      });

      if(e.target === $reseatButton) {
        e.preventDefault();

        $selectButton.forEach((el) => {
          el.removeAttribute('disabled');
          el.parentNode.querySelector('input[type=hidden]').value = '';
        });
      }
    });
  } else{
    sessionStorage.clear('session');
  }
}