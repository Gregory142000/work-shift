<?php
session_start();

if(!isset($_SESSION['access'])) header('location: ./access-denied.php');

// unset($_SESSION['access']);

require '../../vendor/autoload.php';

use lib\controller\GetTemplate;

$template = new GetTemplate();

$template->show_template('admin_page/admin_panel');