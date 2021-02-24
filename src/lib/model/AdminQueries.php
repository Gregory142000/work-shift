<?php
namespace lib\model;

use lib\model\Queries;

class AdminQueries extends Queries {
  function __construct() {
    parent::__construct();
  }

  public function getAdminPassword($first_name, $last_name) {
    $admin_password = $this->getLog(
      "SELECT e_password FROM users WHERE first_name = :NAM AND last_name = :LAS",
      array(
        ':NAM' => $first_name,
        ':LAS' => $last_name
      )
    );
    return $admin_password;
  }
}