<?php
require '../../vendor/autoload.php';

use League\Plates\Engine;

$template = new Engine('./view');

echo $template->render('admin_path');