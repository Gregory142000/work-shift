<?php
namespace lib\controller;

use lib\model\ShiftQueries;

class WorkShift {
  private $shift;

  function __construct() {
    $this->shift = new ShiftQueries();
  }

  public function selectWeekDays($days_array, $shift_id, $employee_id) {
    $shift_query = '';

    foreach($days_array as $day) {
      switch($day) {
        case 'monday':
          $shift_query .= "monday = '$employee_id',";
        break;

        case 'tuesday':
          $shift_query .= "tuesday= '$employee_id',";
        break;

        case 'wednesday':
          $shift_query .= "wednesday= '$employee_id',";
        break;

        case 'thursday':
          $shift_query .= "thursday= '$employee_id',";
        break;

        case 'friday':
          $shift_query .= "friday = '$employee_id',";
        break;

        case 'saturday':
          $shift_query .= "saturday = '$employee_id',";
        break;

        case 'sunday':
          $shift_query .= "sunday = '$employee_id'";
        break;
      }
    }

    $shift_query_without_final_comma = preg_replace('/,$/', '', $shift_query);

    $this->shift->shiftUpdate($shift_query_without_final_comma, $shift_id);
  }

  public function workShiftAPI (){
    echo json_encode($this->shift->shiftShow());
  }
}