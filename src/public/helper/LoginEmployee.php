<?php
require '../../../vendor/autoload.php';

use lib\controller\LoginHandler;

LoginHandler::$first_name = $_POST['first-name'];
LoginHandler::$last_name = $_POST['last-name'];
LoginHandler::$password = $_POST['password'];

$admission = new LoginHandler();

$admission->employeeAuthentication();