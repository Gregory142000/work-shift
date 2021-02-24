<?php $this->layout('layout/layout', [
  'title' => 'login'
]); ?>

<h1>Login Admin</h1>

<form action="../helper/LoginAdmin.php" method="POST">
  <input type="text" name="first-name" required>
  <input type="text" name="last-name" required>
  <input type="password" name="password-admin" required>
  <input type="submit" />
</form>