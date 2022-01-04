<?php
date_default_timezone_set('Asia/Bangkok');
$id= $_REQUEST["id"];
$pw = $_REQUEST["password"];
$conpassword= $_REQUEST["conpassword"];
$firstname= $_REQUEST["firstname"];
$lastname =$_REQUEST["lastname"] ;
$sex =$_REQUEST["sex"] ;
$faculty =$_REQUEST["faculty"] ;
$email =$_REQUEST["email"] ;
$tel =$_REQUEST["tel"] ;
$todayh = getdate();
$d1 = $todayh['hours'];
$m1 = $todayh['minutes'];
$y1 = $todayh['seconds'];

require("connect.php");
mysqli_set_charset($conn, "utf8");

$sql=" INSERT INTO account (id,pw,name,lastname,sex,faculty,email,tel,regisdate)VAlUES('$id','$pw','$firstname','$lastname','$sex','$faculty','$email','$tel','$todayh[year]-$todayh[mon]-$todayh[mday] $d1:$m1:$y1')";

if($conn->query($sql) === true){
  echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('บันทึกข้อมูลแล้ว ')
  window.location.href='login.php'
        </SCRIPT>");
}
?>
