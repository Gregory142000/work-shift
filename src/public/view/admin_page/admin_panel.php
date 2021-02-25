<?php $this->layout('layout/layout', [
  'title' => 'admin path'
]); ?>

<?php $this->start('header'); ?>

<nav class=="Header__nav">
  <a class="Header__link" href="https://work-shift.herokuapp.com/">Home</a>
</nav>

<?php $this->stop(); ?>

<section>
  <h1>Admin Panel</h1>
  <h2 class="margin-height">Welcome: <span class="main-color">Dhruval Kabirpara</span></h2>
</section>

<section class="AdminPanel">
  <div>
    <h3>New Employee</h3>
    <form class="AdminPanel__form  container-box" action="../helper/EmployeesProcessing.php" method="post">
      <input class="input-text" type="text" id="first-name" name="first-name" placeholder="Employee First Name" required>
      <input class="input-text" type="text" id="last-name" name="last-name" placeholder="Employee Last Name" required>
      <input class="input-text" type="text" id="password" name="password" placeholder="Employee Password" required>
      <input class="input-text" type="text" id="password-confirmation" name="password-confirmation" placeholder="Repeat Password" required>
      <input type="hidden" id="update-confirmed" name="update-confirmed" value="">
      <div class="AdminPanel__buttons">
        <input class="button" type="submit" value="Add">
        <button class="button" id="clear-button">Clear</button>
      </div>
    </form>
  </div>

  <div>
    <h3>Employees List</h3>
    <?= $this->insert('admin_page/employees_list'); ?>
  </div>

</section>
  <?php if(isset($_GET['error'])): ?>
    <?= $this->insert('layout/error', [
      "message" => "Database Error"
    ]); ?>
  <?php endif; ?>

