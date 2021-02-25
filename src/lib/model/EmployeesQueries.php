<?php
namespace lib\model;

use lib\model\Queries;

class EmployeesQueries extends Queries {
  function __construct() {
    parent::__construct();
  }

  public function addEmployee($first_name, $last_name, $date, $password, $admin = 'FALSE') {
    $this->setLog(
      "INSERT INTO users(first_name, last_name, date_of_admission, e_password, admin) VALUES(:NAM, :LAS, :DAT, :PAS, :ADM)",
      array(
        ':NAM' => strtolower($first_name), 
        ':LAS' => strtolower($last_name), 
        ':DAT' => $date, 
        ':PAS' => $password, 
        ':ADM' => $admin
      )
    );
  }

  public function deleteEmployee($id) {
    $this->setLog(
      "DELETE FROM users WHERE id = :ID", 
      array(
        ':ID' => $id
      )
    );
  }

  public function updateEmployee($first_name, $last_name, $id) {
    $this->setLog(
      "UPDATE users SET first_name = :NAM, last_name = :LAS WHERE id = :ID", 
      array(
        ':NAM' => strtolower($first_name), 
        ':LAS' => strtolower($last_name), 
        ':ID' => $id
      )
    );
  }

  public function readEmployee() {
    $employee_list = $this->getLog("SELECT * FROM users WHERE admin = 'f'");
    return $employee_list;
  }
}