<?php 
use lib\controller\EmployeeDataProcessing;

$employees = new EmployeeDataProcessing();

foreach($employees->employees_list as $employee) : 

  $first_name = ucfirst($employee['first_name']);
  $last_name = ucfirst($employee['last_name']);
  $id = $employee['id'];

?>

  <div class="AdminPanel__employee  container-box">
    <div class="AdminPanel__info">
      <p>ID: <b><?= $id; ?></b></p>
      <p>Name: <b><?= $first_name; ?> <?= $last_name; ?></b></p>
    </div>
    <div class="AdminPanel__buttonBox">
      <button class="update-button  button">Update</button>
      <a class="link-button" href="../helper/EmployeesProcessing.php?id=<?= $id; ?>">Delete</a>
      <input type="hidden" name="data-id" value="<?= $id; ?>">
      <input type="hidden" name="data-name" value="<?= $first_name; ?>">
      <input type="hidden" name="data-lastname" value="<?= $last_name; ?>">
    </div>
  </div>

<?php endforeach;