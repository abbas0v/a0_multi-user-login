<?php
include_once 'includes/functions.php';
include_once 'includes/connect.php';
session_start();
$sessionverify = new Login;
$sessionverify->SessionVerify();
 ?>
