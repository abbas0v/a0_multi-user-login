<?php
include '../../includes/functions.php';
include '../../includes/connect2.php';
$chss = new Login;
$chss->SessionCheck();
if (!isset($_SESSION['login']) || $_SESSION['role'] != "1") {
  header("Location:../../includes/logout.php");
}
?>
