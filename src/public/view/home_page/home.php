<?php $this->layout('layout/layout', [
  'title' => 'home'
]); ?>

<?php $this->start('links_full_calendar'); ?>

<link href='../js/fullCalendar/lib/main.css' rel='stylesheet' />
<script src='../js/fullCalendar/lib/main.js'></script>
<script src="../js/calendar.js"></script>

<?php $this->stop(); ?>

<?php $this->start('header'); ?>

<nav class=="Header__nav">
  <a class="Header__link" href="#">Log in</a>
</nav>

<?php $this->stop(); ?>

<h1>I am Home</h1>
<h2>Hi Dhruval K., I am your Web App :D</h2>

<div id="calendar" ></div>

<form action="" method="POST">

  <table>
    <tr>
      <th>S</th>
      <th>Mon</th>
      <th>Tue</th>
      <th>Wed</th>
      <th>Thu</th>
      <th>Fri</th>
      <th>Sat</th>
      <th>Sun</th>
      <th>P</th>
    </tr>
    <tr>
      <td>
        <Select>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </Select>
      </td>
      <td><input class="button" type="submit" value="select"></td>
      <td><input class="button" type="submit" value="select"></td>
      <td><input class="button" type="submit" value="select"></td>
      <td><input class="button" type="submit" value="select"></td>
      <td><input class="button" type="submit" value="select"></td>
      <td><input class="button" type="submit" value="select"></td>
      <td><input class="button" type="submit" value="select"></td>
      <td>Null</td>
    </tr>
  </table>

</form>
