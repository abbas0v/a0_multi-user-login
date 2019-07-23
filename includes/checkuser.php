<?php
include_once 'functions.php';
$check = new Login;
$check->SessionCheck();
$check->UserType();
?>
