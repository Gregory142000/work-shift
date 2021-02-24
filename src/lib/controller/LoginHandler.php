<?php
namespace lib\controller;

class LoginHandler {
  public function comparePassword($new_password, $new_password_confirm) {
    if($new_password === "" || $new_password_confirm === "") return FALSE;
    if(!is_string($new_password)) return FALSE;
    if($new_password === $new_password_confirm) return TRUE;
  }
}