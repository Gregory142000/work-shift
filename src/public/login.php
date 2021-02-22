<?php
require '../../vendor/autoload.php';

use lib\controller\GetTemplate;

$template = new GetTemplate();

$template->show_template('login_panel');