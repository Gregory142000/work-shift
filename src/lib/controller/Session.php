<?php
namespace lib\controller;

class Session {
  public $id;

  function __construct() {
    session_start([
      'cookie_lifetime' => 1800
    ]);
  }
}