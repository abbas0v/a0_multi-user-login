<?php
include_once 'includes/functions.php';
$database = new ConnectDB;
$database->IncludeDB();
$baseurl = new BaseURL();
session_start();
$loginfunc = new LoginPage;
$sessionverify = new Login;
$sessionverify->SessionVerify();
 ?>
