<?php
session_start();

unset($_SESSION['access']);
unset($_SESSION['employee']);

session_destroy();

header('location: /');