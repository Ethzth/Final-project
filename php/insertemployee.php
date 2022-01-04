<?php

date_default_timezone_set('Asia/Bangkok');
$eid= $_REQUEST["eid"];
$name= $_REQUEST["name"];
$surname =$_REQUEST["surname"] ;
$salary =$_REQUEST["salary"] ;
$job =$_REQUEST["job"] ;
$tel =$_REQUEST["tel"] ;
$sex =$_REQUEST["sex"] ;
$shift =$_REQUEST["shift"] ;

require("connect.php");
	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
	{
mysqli_set_charset($conn, "utf8");

$sql=" INSERT INTO employee (eid,name,surename,job,salary,sex,tel,pic,shift)VAlUES('$eid','$name','$surname','$job','$salary','$sex','$tel','".$_FILES["filUpload"]["name"]."','$shift')";

if($conn->query($sql) === true){
	
	 echo ("<SCRIPT LANGUAGE='JavaScript'>
	 window.alert('บันทึกข้อมูลแล้ว ')
        window.location.href='tuu.php'
        </SCRIPT>");
} 
	}else{
		$sql=" INSERT INTO employee (eid,name,surename,job,salary,sex,tel,shift)VAlUES('$eid','$name','$surname','$job','$salary','$sex','$tel','$shift')";

		if($conn->query($sql) === true){
	
	 echo ("<SCRIPT LANGUAGE='JavaScript'>
	 window.alert('บันทึกข้อมูลแล้ว ')
        window.location.href='tuu.php'
        </SCRIPT>");
		
	}
	
	}

?>