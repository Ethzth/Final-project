<?php
session_start();

$date=$_REQUEST["date"];
$_SESSION["date"]= $date;

header("location:selectflmr.php");
?>
