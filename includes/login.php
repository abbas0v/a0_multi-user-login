<?php
include_once 'connect.php';
include 'functions.php';
$login = new Login;
$login->LoginSystem();
$login->SessionCheck();
$login->UserType();
?>
