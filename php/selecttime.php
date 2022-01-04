<?php
date_default_timezone_set('Asia/Bangkok');
$todayh = getdate(); 
$d1 = $todayh['hours'];
$m1 = $todayh['minutes'];
$y1 = $todayh['seconds'];
require("connect.php");
session_start();
$eid = $_SESSION["eid"];

	
mysqli_set_charset($conn, "utf8");

$sql="select * from time where timeEID ='$eid' ORDER BY timeID DESC LIMIT 1";	
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	 while($row = $result->fetch_assoc()) {
     
		$best= 	$row['time'];
		$best1= $row['date'];
		
		$to_time = strtotime("$best1 , $best");
		$from_time = strtotime("$todayh[year]-$todayh[mon]-$todayh[mday] $d1:$m1:$y1");
        
		$o =round(abs($to_time - $from_time) /(60*60),2);
		$a= strlen($o);
	
		if($o>=1){
		
		 if($a==4){
		$sub1=substr($o,0,1);
		$sub=substr($o,2);
		if($sub<=49){
			$sub =".00";
		$x="$sub1$sub";
	 
		
		}else if ($sub>49){
			$sub =".50";
			$x="$sub1$sub";
		
		}
		}else if($a==5){
		$sub1=substr($o,0,2);
		$sub=substr($o,3);
		if($sub<=49){
		$sub =".00";
		$x="$sub1$sub";
	
		
		}else if ($sub>49){
			$sub =".50";
			$x="$sub1$sub";
		
		}
	 	}else if($a==6){
		$sub1=substr($o,0,3);
		$sub=substr($o,4);
		if($sub<=49){
			$sub =".00";
		$x="$sub1$sub";
	  
		
		}else if ($sub>49){
			$sub =".50";
			$x="$sub1$sub";
		
		}
		
			
		}
		$_SESSION["time"]=$best;
		$_SESSION["date"]=$best1;
		$_SESSION["x"]=$x;
		header("location:timeout.php");
       }else{
		   echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('ระยะเวลาการทำงานไม่ถึง 1  ขั่วโมง ')
        window.location.href='Test.php'
        </SCRIPT>");
   

   }
	 

}

		
} else{
	echo "fail" ;
}
?>
