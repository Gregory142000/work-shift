<?php
namespace lib\controller;

use League\Plates\Engine;

class GetTemplate {
  private $template;

  public function __construct() {
    $this->template = new Engine('./view');
  }

  public function show_template($view) {
    echo $this->template->render($view);
  }
}