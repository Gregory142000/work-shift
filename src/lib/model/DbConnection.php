<?php
namespace lib\model;

require __DIR__ . '/DbConfig.php';

use \PDO;


class DbConnection {
  protected $connection;

  private $db_name = DB_NAME;
  private $db_host = DB_HOST;
  private $db_user = DB_USER;
  private $db_password = DB_PASSWORD;

  public function __construct() {
    try{
      $this->connection = new PDO("pgsql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_password);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e) {
      echo 'Ocurrio un error en la base de datos.';
    }
  }

  public function __destruct() {
    $this->connection = null;
  }
}