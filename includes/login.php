<?php
include_once 'connect.php'; // include connection
include 'functions.php'; //include functions
$login = new Login;
$login->LoginSystem();
$login->SessionCheck();
$login->UserType();
?>
