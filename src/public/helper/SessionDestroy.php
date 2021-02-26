<?php
session_start();

unset($_SESSION['access']);

session_destroy();

header('location: /');