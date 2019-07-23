<?php
include_once 'functions.php'; //include functions
$check = new Login;
$check->SessionCheck();
$check->UserType();
?>
