<?php
session_start();

require("connect.php");

$name= $_REQUEST["name"];
$lastname= $_REQUEST["lastname"];
$sex= $_REQUEST["sex"];
$email= $_REQUEST["email"];
$tel= $_REQUEST["tel"];
$faculty= $_REQUEST["faculty"];
$id = $_SESSION["id"];

mysqli_set_charset($conn, "utf8");

$sql=" UPDATE account SET name = '$name' , lastname = '$lastname' , sex = '$sex' , email = '$email', faculty = '$faculty' , tel = '$tel' WHERE id = '$id' ";

if($conn->query($sql) === true){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('แก้ไขข้อมูลแล้ว ')
    window.location.href='adminpageuserlist.php'
    </SCRIPT>");
} else{
	echo "Fail  :".$conn->error;
}


?>
