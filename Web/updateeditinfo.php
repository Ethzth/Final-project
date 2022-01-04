<?php
require("connect.php");

$topic= $_REQUEST["topic"];

mysqli_set_charset($conn, "utf8");

$sql=" UPDATE  booking  SET  topic = '$topic'";

if($conn->query($sql) === true){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('บันทึกข้อมูลแล้ว ')
    window.location.href='selectflmr.php'
    </SCRIPT>");
} else{
	echo "Fail  :".$conn->error;
}

?>
