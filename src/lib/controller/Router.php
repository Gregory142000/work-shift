<?php
namespace lib\controller;

use League\Plates\Engine;

class Router {
  private $template;
  private $path_collection = [];

  function __construct() {
    $this->template = new Engine('./view');
  }

  public function add($path, $template) {
    $this->path_collection[$path] = $template;
  }

  public function start() {
    foreach($this->path_collection as $key => $value) {
      if($_SERVER['REQUEST_URI'] === $key) {
        echo $this->template->render($value);
        return;
      }
    }
    echo $this->template->render('error404');
  }
}