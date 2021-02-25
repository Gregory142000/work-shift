<?php $this->layout('layout/layout'); ?>

<?php $this->start('header'); ?>

<nav class=="Header__nav">
  <a class="Header__link" href="https://work-shift.herokuapp.com/">Home</a>
</nav>

<?php $this->stop(); ?>

<h1 class="margin-height">Access Denied</h1>

<div class="AccessDenied  container-box  container-box--background">
  <p class="AccessDenied__text">Error when trying to enter the administrator panel, <span class="main-color">try to log in again</span>.</p>
</div>