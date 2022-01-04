<?php
session_start();
date_default_timezone_set('Asia/Bangkok');
require("connect.php");
$id=$_SESSION["id"];
$floor=$_SESSION["floor"];
$roomnumber=$_SESSION["roomnumber"];
$time = $_SESSION["time"];
$topic =$_REQUEST["topic"] ;
$date=$_SESSION["date"];
$allday = $_SESSION["allday"];

if($allday == 0 ){
  $sql = "INSERT INTO booking (idbooker, floor, roomnumber, date, time ,topic)
  VALUES ('$id','$floor','$roomnumber','$date','$time','$topic')";
  $query = mysqli_query($conn,$sql);
  header("location:selectflmr.php");

}else{
  $sql = "INSERT INTO booking (idbooker, floor, roomnumber, date, time ,topic,allday)
  VALUES ('$id','$floor','$roomnumber','$date','08:00:00','$topic','$allday'),('$id','$floor','$roomnumber','$date','13:00:00','$topic','$allday')";
  $query = mysqli_query($conn,$sql);
  header("location:selectflmr.php");

}


  ?>
