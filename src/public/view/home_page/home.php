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
<script src="../js/calendar.js" type="module"></script>

<?php $this->stop(); ?>


<?php $this->start('header'); ?>

<nav class=="Header__nav">
  <a class="Header__link" id="link-logIn" href="#">Log in</a>
</nav>

<?= $this->insert('home_page/log_in'); ?>

<?= $this->insert('home_page/log_out', [
  'employee' => $employee_name
]); ?>

<input type="hidden" id="employee-login" name="employee-login" value="<?= $employee_id; ?>" />

<?php $this->stop(); ?>

<section class="calendar-section">
  <h1 class="margin-height">Work shift schedule</h1>

  <div id="calendar" class="Calendar" ></div>
  <img id="loader" src="../img/Spinner-1s-200px.svg" alt="Loader...">
</section>

<?php if($employee_id !== ''): ?>
<section class="console-section">
  <?= $this->insert('home_page/table_select_work'); ?>
</section>
<?php endif; ?>