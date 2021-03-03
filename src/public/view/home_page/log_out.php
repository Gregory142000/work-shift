<h2 id="Header-message-logOut" class="Header__message--active">Welcome <span class="main-color"><?= $this->e($employee); ?></span></h2>

<div class="Header__logOutBox  container-box">
  <h4 class="Header__title">Log Out</h4>
  <p class="Header__text">Enough work for today?</p>
  <form method="POST" action="../helper/SessionDestroy.php">
    <input type="submit" class="button" id="button-logout" value="Log Out">
  </form>
</div>