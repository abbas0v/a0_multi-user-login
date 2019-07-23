<?php
include_once 'includes/functions.php'; // include functions
include_once 'includes/connect.php'; //include connection
session_start();
$sessionverify = new Login;
$sessionverify->SessionVerify();
 ?>
