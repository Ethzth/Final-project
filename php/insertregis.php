<?php session_start();
date_default_timezone_set('Asia/Bangkok');?>
<?php

$name= $_REQUEST["name"];
$surname =$_REQUEST["surname"] ;
$Tel =$_REQUEST["tel"] ;
$salary =$_REQUEST["salary"] ;
$EmployeeID =$_REQUEST["id"] ;
$time =$_REQUEST["time"] ;

require("ncon.php");
	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
	{

mysqli_set_charset($conn, "utf8");

$sql=" INSERT INTO employee (Name,Surname,Tel,Salary,EmployeeID,time,pic)VAlUES('$name','$surname','$Tel','$salary','$EmployeeID',DATE_ADD(NOW(),INTERVAL 0 HOUR),'".$_FILES["filUpload"]["name"]."')";

if($conn->query($sql) === true){
	 	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('บันทึกข้อมูลแล้ว ')
    window.location.href='showregis.php'
    </SCRIPT>");
} else{
	echo "Fail  :".$conn->error;
}
	}
?>
