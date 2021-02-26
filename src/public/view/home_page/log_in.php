
<h2 class="Header__message">Ready to start?</h2>

<div class="Header__logInBox  container-box">
  <h4 class="Header__title">Log In</h4>
  <div class="Header__login">
    <form class="Header__form" action="../helper/LoginEmployee.php" method="POST">
      <div class="Header__inputBox">
        <label for="first-name">First Name</label>
        <input class="input-text" type="text" name="first-name" id="first-name">
      </div>
      <div class="Header__inputBox">
        <label for="last-name">Last Name</label>
        <input class="input-text" type="text" name="last-name" id="last-name">
      </div>
      <div class="Header__inputBox">
        <label for="password">Password</label>
        <input class="input-text" type="password" name="password" id="password">
      </div>
      <input class="button" type="submit" value="Log in">
    </form>
  </div>
</div>