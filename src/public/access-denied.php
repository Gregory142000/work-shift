<?php
require '../../vendor/autoload.php';

use lib\controller\GetTemplate;

$template = new GetTemplate();

$template->show_template('error_messages/page_access_denied');