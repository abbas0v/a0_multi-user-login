<?php
include '../../includes/functions.php';
include '../../includes/connect.php';
$ufunc = new UserFunctions;
$chss = new Login;
$chss->SessionCheck();
if (!isset($_SESSION['login']) || $_SESSION['role'] != "0") {
  header("Location:../../includes/logout.php");
}
?>
