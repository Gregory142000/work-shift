<?php
namespace lib\model;

use lib\model\DbConnection;
use \PDO;

class Queries extends DbConnection {
  private $employee_data = [];

  function __construct() {
    parent::__construct();
  }

  protected function setLog($sql, $sql_options = null) {
    $query = $sql;
    $sentence = $this->connection->prepare($query); 
    $sentence->execute($sql_options);
  }

  protected function getLog($sql, $sql_options = null) {
    $query = $sql;
    $sentence = $this->connection->prepare($query);
    $sentence->execute($sql_options);
    while($row = $sentence->fetch(PDO::FETCH_ASSOC)) {
      array_push($this->employee_data, $row);
    }
    return $this->employee_data;
  }
}