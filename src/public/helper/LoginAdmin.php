<?php
require '../../../vendor/autoload.php';

use lib\controller\LoginHandler;

$admission = new LoginHandler();

$admission->first_name = $_POST['first-name'];
$admission->last_name = $_POST['last-name'];
$admission->password = $_POST['password-admin'];

$admission->adminAuthentication();