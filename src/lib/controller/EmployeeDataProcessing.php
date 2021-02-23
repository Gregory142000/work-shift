<?php
namespace lib\controller;

require '../vendor/autoload.php'; // TODO: Entocuentra la forma de que esta clase sea encontrada.

use lib\model\DbQuery;
use \PDO;

class EmployeeDataProcessing {
  public $employees_data = [];

  public function __construct() {
    $query_response = new DbQuery();
    $employees = $query_response->read();
    $employees->execute();
    $employees_data = $employees->fetch(PDO::FETCH_ASSOC);
    while($row = $employees->fetch(PDO::FETCH_ASSOC)) {
      array_push($this->employees_data, $row);
    }
  }
}