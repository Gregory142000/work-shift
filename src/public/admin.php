<?php
session_start([
  'cookie_lifetime' => 1800
]);

if(!isset($_SESSION['access-admin'])) header('location: ./access-denied.php');

require '../../vendor/autoload.php';

use lib\controller\GetTemplate;

$template = new GetTemplate();

$template->show_template('admin_page/admin_panel');