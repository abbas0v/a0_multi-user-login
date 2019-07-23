<?php
include_once 'connect2.php';
include 'functions.php';
$login = new Login;
$login->Login();
$login->SessionCheck();
$login->UserType();
?>
