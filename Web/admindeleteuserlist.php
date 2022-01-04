<?php
session_start();
require('connect.php');

$id=$_SESSION["id"];

mysqli_set_charset($conn, "utf8");

$sql=" DELETE FROM account where id = '$id' ";

if($conn->query($sql) === true){
  	echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert('ลบข้อมูลผู้ใช้แล้ว ')
      window.location.href='adminpageuserlist.php'
      </SCRIPT>");
  }else{
  	echo "Fail  :".$conn->error;
  }

  ?>
