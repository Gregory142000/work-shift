<?php $this->layout('layout/layout', [
  'title' => 'login'
]); ?>

<?php $this->start('header'); ?>

<nav class=="Header__nav">
  <a class="Header__link" href="https://work-shift.herokuapp.com/">Home</a>
</nav>

<?php $this->stop(); ?>

<h1 class="margin-height">Login Admin</h1>

<form class="LoginAdmin  container-box" action="../helper/LoginAdmin.php" method="POST">
  <div class="LoginAdmin__imgBox">
    <img  class="LoginAdmin__img" src="../img/user.png" alt="user-image">
  </div>
  <div class="LoginAdmin__inputBox">
    <input class="input-text" placeholder="First Name" type="text" name="first-name" required>
    <input class="input-text" placeholder="Last Name" type="text" name="last-name" required>
    <input class="input-text" placeholder="Password" type="password" name="password-admin" required>
    <input class="button" type="submit" value="Log In" />
  </div>
</form>