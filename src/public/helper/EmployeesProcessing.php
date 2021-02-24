<?php
require '../../../vendor/autoload.php';

use lib\controller\EmployeeDataProcessing;

$processing = new EmployeeDataProcessing();

try{
  if(isset($_GET['id'])) {
    $employee_id = $_GET['id'];

    $processing->deleteEmployee($employee_id);
  } else{
    $employee_first_name = $_POST['first-name'];
    $employee_last_name = $_POST['last-name'];
    $employee_password = $_POST['password'];
    $confirm_employee_password = $_POST['password-confirmation'];

    if($_POST['update-confirmed'] !== ''){
      $employee_id = $_POST['update-confirmed'];

      $processing->updateEmployee($employee_first_name, $employee_last_name, $employee_id);
    } else{
      $processing->passwordHash($employee_password, $confirm_employee_password);
      $processing->addEmployee($employee_first_name, $employee_last_name);
    }
  }
  header('Location: ../admin.php');
} catch(Exception $e) {
  header('Location: ../admin.php?error=true');
}