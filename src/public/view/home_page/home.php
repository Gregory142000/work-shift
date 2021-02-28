<?php
use lib\controller\Session;

$session = new Session();
$employee_id = '';
$employee_name = '';

if(isset($_SESSION['access'])) {
  $employee_id = $_SESSION['access'];
  $employee_name = $_SESSION['employee'];
}

?>

<?php $this->layout('layout/layout', [
  'title' => 'home'
]); ?>

<?php $this->start('links_full_calendar'); ?>

<link href='../js/fullCalendar/lib/main.css' rel='stylesheet' />
<script src='../js/fullCalendar/lib/main.js'></script>
<script src="../js/startCalendar.js" type="module"></script>

<?php $this->stop(); ?>

<?php $this->start('header'); ?>

<?= $this->insert('home_page/log_in'); ?>

<?= $this->insert('home_page/log_out', [
  'employee' => $employee_name
]); ?>

<nav class=="Header__nav">
  <a class="Header__link" id="link-logIn" href="#">Log in</a>
</nav>

<input type="hidden" id="employee-login" name="employee-login" value="<?= $employee_id; ?>" />

<?php $this->stop(); ?>

<h1>I am Home</h1>
<h2>Hi Dhruval K., I am your Web App :D</h2>

<div id="calendar" ></div>

<?= $this->insert('home_page/table_select_work'); ?>
