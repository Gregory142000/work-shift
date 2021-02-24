<?php
namespace lib\model;

// require '../../../vendor/autoload.php';

use lib\model\DbConnection;
use \PDO;

class DbQuery extends DbConnection {
  public $employee_data = [];

  public function __construct() {
    parent::__construct();
  }

  public function add($name, $lastname, $date, $password, $admin = 'FALSE') {
    $query = "INSERT INTO users(first_name, last_name, date_of_admission, e_password, admin) VALUES(:NAM, :LAS, :DAT, :PAS, :ADM)";
    $sentence = $this->connection->prepare($query); 
    $sentence->execute(array(':NAM' => $name, ':LAS' => $lastname, ':DAT' => $date, ':PAS' => $password, ':ADM' => $admin));
  }

  public function delete($id) {
    $query = "DELETE FROM users WHERE id = :ID";
    $sentence = $this->connection->prepare($query); 
    $sentence->execute(array(':ID' => $id));
  }

  public function update($name, $lastname, $id) {
    $query = "UPDATE users SET first_name = :NAM, last_name = :LAS WHERE id = :ID;";
    $sentence = $this->connection->prepare($query); 
    $sentence->execute(array(':NAM' => $name, ':LAS' => $lastname, ':ID' => $id));
  }

  public function read() {
    $query = "SELECT * FROM users WHERE admin = 'f'";
    $sentence = $this->connection->prepare($query);
    $sentence->execute();
    while($row = $sentence->fetch(PDO::FETCH_ASSOC)) {
      array_push($this->employee_data, $row);
    }
    return $this->employee_data;
  }
}