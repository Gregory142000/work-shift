<?php
namespace lib\controller;

use lib\model\AdminQueries;

class LoginHandler {
  public $first_name;
  public $last_name;
  public $password;

  public function comparePassword($new_password_confirm) {
    if($this->password === "" || $new_password_confirm === "") return FALSE;
    if(!is_string($this->password)) return FALSE;
    if($this->password === $new_password_confirm) return TRUE;
  }

  public function verifyPassword() {
    $admin_queries = new AdminQueries();
    $password_hash = $admin_queries->getAdminPassword($this->first_name, $this->last_name);
    $password_hash = $password_admin[0]['e_password'];

    if(password_verify($this->password, $password_hash)); //ToDo: Te quedaste por aqui.
  }
}