<?php
namespace lib\model;

use lib\model\Queries;

class UsersQueries extends Queries {
  function __construct() {
    parent::__construct();
  }

  public function getUsersData($first_name, $last_name) {
    $admin_data = $this->getLog(
      "SELECT * FROM users WHERE first_name = :NAM AND last_name = :LAS",
      array(
        ':NAM' => strtolower($first_name),
        ':LAS' => strtolower($last_name)
      )
    );
    return $admin_data;
  }
}