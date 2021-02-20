<?php
require '../../vendor/autoload.php';

use League\Plates\Engine;
use lib\controller\Router;

$template = new Engine('./view');

echo $template->render('admin_path');

$router = new Router(); 