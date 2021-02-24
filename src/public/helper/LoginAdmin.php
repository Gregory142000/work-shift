<?php
require '../../../vendor/autoload.php';

use lib\model\AdminQueries;

$admin_list = new AdminQueries();

$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$password = $_POST['password'];

$admin_list = $admin_list->getAdminPassword($first_name, $last_name);

var_dump($admin_list[0]['e_password']);