<?php
namespace lib\model;

require __DIR__ . '/vendor/autoload.php';

use lib\model\DbConnection;
use \PDO;

class DbQuery extends DbConnection {
  public function __construct() {
    parent::__construct();
  }

  public function add($name, $lastname, $date, $password, $admin) {
    $query = "INSERT INTO users(name, lastname, date_of_admission, e_password, admin) VALUES(:NAM, :LAS, :DAT, :PAS, :ADM)";
    $sentence = $this->connection->prepare($query); 
    $sentence->execute(array(':NAM' => $name, ':LAS' => $lastname, ':DAT' => $date, ':PAS' => $password, ':ADM' => $admin));
  }

  public function delete($id) {
    $query = "DELETE FROM users WHERE id = :ID";
    $sentence = $this->connection->prepare($query); 
    $sentence->execute(array(':ID' => $id));
  }

  public function update($name, $lastname, $password, $id) {
    $query = "UPDATE users SET name = :NAM, lastname = :LAS, e_password = :PAS WHERE id = :ID;";
    $sentence = $this->connection->prepare($query); 
    $sentence->execute(array(':NAM' => $name, ':LAS' => $lastname, ':PAS' => $password, ':ID' => $id));
  }

  public function read() {
    $query ="SELECT * FROM users";
    $sentence = $this->connection->prepare($query);
    return $sentence;
  }
}