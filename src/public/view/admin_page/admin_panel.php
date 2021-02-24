<?php $this->layout('layout/layout', [
  'title' => 'admin path'
]); ?>

<section>
  <h1>Admin Panel</h1>
  <h2>Welcome</h2>
</section>

<section>
  <div>
    <h3>New Employee</h3>
    <form action="../helper/EmployeesProcessing.php" method="post">
      <input type="text" id="first-name" name="first-name" placeholder="Employee First Name" required>
      <input type="text" id="last-name" name="last-name" placeholder="Employee Last Name" required>
      <input type="text" id="password" name="password" placeholder="Employee Password" required>
      <input type="text" id="password-confirmation" name="password-confirmation" placeholder="Repeat Password" required>
      <input type="hidden" id="update-confirmed" name="update-confirmed" value="">
      <input type="submit" value="Add">
      <button id="clear-button">Clear</button>
    </form>
  </div>

  <div>
    <?= $this->insert('admin_page/employees_list'); ?>
  </div>

  <?php if(isset($_GET['error'])): ?>
    <?= $this->insert('layout/error', [
      "message" => "Database Error"
    ]); ?>
  <?php endif; ?>
</section>

