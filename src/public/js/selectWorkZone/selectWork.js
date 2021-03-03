export default function $buttonSelectWork() {
  const $employeeLogin = document.getElementById('employee-login'),
        $messageLogOut = document.getElementById('Header-message-logOut'),
        $idEmployee = document.getElementById('id-employee'),
        $buttonSend = document.getElementById('button-send'),
        $selectButton = document.querySelectorAll('.button-select'),
        sessionId = $employeeLogin.getAttribute('value');
        
  
  if(sessionId !== ''){
    sessionStorage.setItem('session', sessionId);

    $messageLogOut.style.display = 'inline-block';
    
    $idEmployee.value = sessionStorage.getItem('session');

    $buttonSend.removeAttribute('disabled');

    document.addEventListener('click', (e) => {
      $selectButton.forEach((el) => {
        if(e.target === el) {
          e.preventDefault();

          el.setAttribute('disabled', 'disabled');
          el.parentNode.querySelector('input[type=hidden]').value = 'TRUE';
        }
      });
    });
  } else{
    sessionStorage.clear('session');
  }
}