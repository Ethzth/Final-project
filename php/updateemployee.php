
<?php
require("connect.php");
$eid= $_REQUEST["eid"];
$name= $_REQUEST["name"];
$surname =$_REQUEST["surname"] ;
$salary =$_REQUEST["salary"] ;
$job =$_REQUEST["job"] ;
$tel =$_REQUEST["tel"] ;
$sex =$_REQUEST["sex"] ;
mysqli_set_charset($conn, "utf8");
$sql=" update  employee  set  name = '$name' , surename = '$surname' , job ='$job'  , sex ='$sex' , tel ='$tel'  ,salary='$salary' where eid = $eid ";	

if($conn->query($sql) === true){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('บันทึกข้อมูลแล้ว ')
    window.location.href='tuu.php'
    </SCRIPT>");
} else{
	echo "Fail  :".$conn->error;
}

?>