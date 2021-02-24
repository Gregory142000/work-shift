<?php
namespace lib\controller;

// require '../../../vendor/autoload.php'; 

use lib\model\DbQuery;
use lib\controller\LoginHandler;
use Carbon\Carbon;
use \PDO;

class EmployeeDataProcessing {
  private $query_response;
  private $password;
  private $date_today;

  public $employees_list = [];

  public function __construct() {
    $this->query_response = new DbQuery();
    $this->employees_list = $this->query_response->read();
  }

  public function passwordHash($new_password, $new_password_confirm) {
    $password_per_password = new LoginHandler();
    $are_they_equal = $password_per_password->comparePassword($new_password, $new_password_confirm);
    if($are_they_equal) {
      $new_password_with_hash = password_hash($new_password, PASSWORD_DEFAULT, ['cost' => 16]);
      $this->password = $new_password_with_hash;
    }
  }

  public function addEmployee($name, $lastname) {
    $this->formatDate();
    $this->query_response->add($name, $lastname, $this->date_today, $this->password);
  }

  public function updateEmployee($name, $lastname, $id) {
    $this->query_response->update($name, $lastname, $id);
  }

  public function deleteEmployee($id) {
    $this->query_response->delete($id);
  }

  private function formatDate() {
    $date = new Carbon();
    $this->date_today = $date->today()->isoFormat('YYYY-MM-DD');
  }  
}