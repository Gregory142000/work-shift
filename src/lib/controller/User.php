<?php
namespace lib\controller;

use lib\model\UsersQueries;

class User {
  public $id;
  public $first_name;
  public $last_name;
  public $password_hash;
  public $date_of_admission;
  public $is_admin;

  function __construct($first_name, $last_name) {
    $user = new UsersQueries();
    $user_data = $user->getUsersData($first_name, $last_name);

    $this->id = $user_data[0]['id'];
    $this->first_name = $user_data[0]['first_name'];
    $this->last_name = $user_data[0]['last_name'];
    $this->password_hash = $user_data[0]['e_password'];
    $this->date_of_admission = $user_data[0]['date_of_admission'];
    $this->is_admin = $user_data[0]['admin'];
  }
}