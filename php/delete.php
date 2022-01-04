<?php

session_start();
$eid =$_REQUEST["eid"];

require("connect.php");
	
mysqli_set_charset($conn, "utf8");

$sql=" delete from employee where eid='$eid'";

if($conn->query($sql) === true){
	 echo ("<SCRIPT LANGUAGE='JavaScript'>
	     window.alert('ลบข้อมูลเรียบร้อย ')
		 window.location.href='adminedit.php?Page=1'
        </SCRIPT>");
} else{
	echo "Fail  :".$conn->error;
}


?>