<?php
namespace lib\model;

require '../../../vendor/autoload.php';

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
    $sentence->execute();
    while($row = $sentence->fetch(PDO::FETCH_ASSOC)) {
      print($row['id'] . ' ' . $row['name'] . ' ' . $row['lastname'] . ' ' . $row['date_of_admission'] . ' ' . $row['e_password'] . ' ' . $row['admin'] . '<br>');
    }
  }
}

$db = new DbQuery();

$db->read();