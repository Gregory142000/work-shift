<?php
namespace lib\controller;

use lib\model\EmployeesQueries;
use Carbon\Carbon;
use \PDO;

class EmployeeDataProcessing {
  public $employees_list = [];

  private $query_response;
  private $password;
  private $date_today;

  public function __construct() {
    $this->query_response = new EmployeesQueries();
    $this->employees_list = $this->query_response->readEmployee();
  }

  public function passwordHash($new_password, $new_password_confirm) {
    if($new_password === "" || $new_password_confirm === "") return FALSE;
    if(!is_string($new_password)) return FALSE;
    $are_they_equal = $new_password === $new_password_confirm ? TRUE : FALSE;
    if($are_they_equal) {
      $new_password_with_hash = password_hash($new_password, PASSWORD_DEFAULT, ['cost' => 16]);
      $this->password = $new_password_with_hash;
    }
  }

  public function addNewEmployee($first_name, $last_name) {
    $this->formatDate();
    $this->query_response->addEmployee($first_name, $last_name, $this->date_today, $this->password);
  }

  public function updateEmployeeData($first_name, $last_name, $id) {
    $this->query_response->updateEmployee($first_name, $last_name, $id);
  }

  public function deleteEmployeeData($id) {
    $this->query_response->deleteEmployee($id);
  }

  private function formatDate() {
    $date = new Carbon();
    $this->date_today = $date->today()->isoFormat('YYYY-MM-DD');
  }  
}