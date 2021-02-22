<?php
require '../../vendor/autoload.php';

use lib\controller\Router;

$router = new Router(); 

// $router->add('/', 'home');
$router->add('/login', 'login');
$router->add('/admin', 'admin_path');

$router->start();

printf($_SERVER['REQUEST_URI']);