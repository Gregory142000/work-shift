<?php
namespace lib\controller;

use lib\controller\User;
use lib\controller\Session;

class LoginHandler {
  public static $first_name;
  public static $last_name;
  public static $password;

  private $user_data;

  function __construct() {
    $this->user_data = new User(self::$first_name, self::$last_name);
  }

  public function adminAuthentication() {
    $is_admin = $this->user_data->is_admin;
    $password_access = $this->verifyCredentials();
    
    if($password_access === TRUE && $is_admin === TRUE) {
      $session = new Session();
      $session->id = $this->user_data->id;

      $_SESSION['access-admin'] = $session->id;

      header('location: ../admin.php');
    } else{
      header('location: ../access-denied.php');
    }
  }

  public function employeeAuthentication() {
    $password_access = $this->verifyCredentials();

    if($password_access) {
      $session = new Session();
      $session->id = $this->user_data->id;

      $_SESSION['access'] = $session->id;
      $_SESSION['employee'] = $this->user_data->first_name . ' ' . $this->user_data->last_name;

      header('location: /');
    } else{
      header('location: ../access-denied.php');
    }
  }
  
  private function verifyCredentials() {
    $password_hash = $this->user_data->password_hash;
  
    if(password_verify(self::$password, $password_hash)) {
      return TRUE;
    } else{
      return FALSE;
    }
  }
}