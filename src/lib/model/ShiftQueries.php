<?php
namespace lib\model;

use lib\model\Queries;

class ShiftQueries extends Queries {
  function __construct() {
    parent::__construct();
  }

  public function shiftUpdate($week_shifts, $id) {
    $this->setLog(
      "UPDATE shifts SET $week_shifts WHERE shift_number = :ID",
      array(
        ':ID' => $id
      )
    );
  }

  public function shiftShow (){
    $shifts = $this->getLog(
      "SELECT * FROM shifts"
    );

    return $shifts;
  }
}