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
    <form action="" method="post">
      <input type="text" name="name" placeholder="Employee Name" required>
      <input type="password" name="password" placeholder="Employee Password" required>
      <input type="password" name="password-confirmation" placeholder="Repeat Password" required>
      <input type="submit" value="add">
    </form>
  </div>

  <div>
    
  </div>
</section>

