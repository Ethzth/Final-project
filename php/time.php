
<?php
date_default_timezone_set('Asia/Bangkok');
$todayh = getdate(); 
$d1 = $todayh['hours'];
$m1 = $todayh['minutes'];
$y1 = $todayh['seconds'];
session_start();
$eid = $_SESSION["eid"];

require("connect.php");
	
mysqli_set_charset($conn, "utf8");

$sql=" INSERT INTO time (timeID,date,time,timeEID)VAlUES('','$todayh[year]-$todayh[mon]-$todayh[mday]','$d1:$m1:$y1','$eid')";

if($conn->query($sql) === true){
	 echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.location.href='profileemployee.php'
        </SCRIPT>");
} else{
	echo "Fail  :".$conn->error;
}


?>