<?php
require '../../../vendor/autoload.php';

use lib\controller\WorkShift;

$work_shift = new WorkShift();

$shift_days = [];

$shift_number = $_POST['shift-number'];
$employee_id = $_POST['employee-id'];

foreach($_POST as $week_day => $value) {
  if($value === 'TRUE') {
    array_push($shift_days, $week_day);
  }
}

$work_shift->selectWeekDays($shift_days, $shift_number, $employee_id);

header('location: /');