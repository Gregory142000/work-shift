<?php 
use lib\controller\EmployeeDataProcessing;

$employees = new EmployeeDataProcessing();

?>

<?php foreach($employees->employees_data as $employee) : ?>

  <div>
    id: <?= $employee['id']; ?> 
    <br>
    name: <?= $employee['name']; ?> <?= $employee['lastname']; ?>
  </div>

<?php endforeach; ?>