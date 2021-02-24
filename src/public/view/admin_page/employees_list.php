<?php 
use lib\controller\EmployeeDataProcessing;

$employees = new EmployeeDataProcessing();
?>

<?php foreach($employees->employees_list as $employee) : ?>

  <div>
    <p>ID:<b><?= $employee['id']; ?></b></p>
    <p>Name: <b><?= $employee['first_name']; ?> <?= $employee['last_name']; ?></b></p>
    <div>
      <button class="update-button">Update</button>
      <a href="../helper/EmployeesProcessing.php?id=<?= $employee['id']; ?>">Delete</a>
      <input type="hidden" name="data-id" value="<?= $employee['id']; ?>">
      <input type="hidden" name="data-name" value="<?= $employee['first_name']; ?>">
      <input type="hidden" name="data-lastname" value="<?= $employee['last_name']; ?>">
    </div>
  </div>

<?php endforeach;