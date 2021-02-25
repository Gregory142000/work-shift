<?php
namespace lib\controller;

use lib\controller\User;

class LoginHandler {
  public $first_name;
  public $last_name;
  public $password;

  public function comparePassword($new_password_confirm) {
    if($this->password === "" || $new_password_confirm === "") return FALSE;
    if(!is_string($this->password)) return FALSE;
    if($this->password === $new_password_confirm) return TRUE;
  }
  
  public function adminAuthentication() {
    $user_data = new User($this->first_name, $this->last_name);
    $is_admin = $user_data->is_admin;
    $password_access = $this->verifyCredentials();
    
    if($password_access === TRUE && $is_admin === TRUE) {
      session_start([
        'cookie_lifetime' => 1
      ]);

      $_SESSION['access'] = TRUE;

      header('location: ../admin.php');
    } else{
      header('location: ../access-denied.php');
    }
  }
  
  private function verifyCredentials() {
    $user_data = new User($this->first_name, $this->last_name);
    $password_hash = $user_data->password_hash;
  
    if(password_verify($this->password, $password_hash)) {
      return TRUE;
    } else{
      return FALSE;
    }
  }
}