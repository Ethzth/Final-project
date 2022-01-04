<?php
date_default_timezone_set('Asia/Bangkok');
$todayh = getdate(); 
$d1 = $todayh['hours'];
$m1 = $todayh['minutes'];
$y1 = $todayh['seconds'];
require("connect.php");
session_start();
$eid = $_SESSION["eid"];
$x = $_SESSION["x"];
$shift = $_SESSION["shift"];
$salary = $_SESSION["salary"];
$date= $_SESSION["date"];
$time= $_SESSION["time"];
$o = 0;	
$sub1=substr($time,0,2);
mysqli_set_charset($conn, "utf8");

if($shift==1){
	if($sub1 >= 8 && $sub1 <=17){
	if($x<=9){
		$sql="UPDATE time SET timeout ='$d1:$m1:$y1',dateout ='$todayh[year]-$todayh[mon]-$todayh[mday]',timeworking ='$x' where timeEID ='$eid' ORDER BY timeID DESC LIMIT 1";	
        if($conn->query($sql) === true){
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.location.href='exitemployee.php'
         </SCRIPT>");}
	}else{
	$o=$x-9;
	$sql="UPDATE time SET timeout ='$d1:$m1:$y1',dateout ='$todayh[year]-$todayh[mon]-$todayh[mday]',timeworking ='$x',overtime ='$o'  where timeEID ='$eid' ORDER BY timeID DESC LIMIT 1";	
        if($conn->query($sql) === true){
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.location.href='exitemployee.php'
         </SCRIPT>");}
	}
	}else{
	$sql="UPDATE time SET timeout ='$d1:$m1:$y1',dateout ='$todayh[year]-$todayh[mon]-$todayh[mday]',overtime ='$x' where timeEID ='$eid' ORDER BY timeID DESC LIMIT 1";	
        if($conn->query($sql) === true){
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.location.href='exitemployee.php'
         </SCRIPT>");}
		 }  
}else if($shift==2){
	if($sub1 >=15 && $sub1 <=23){
	if($x<=9){
		$sql="UPDATE time SET timeout ='$d1:$m1:$y1',dateout ='$todayh[year]-$todayh[mon]-$todayh[mday]',timeworking ='$x' where timeEID ='$eid' ORDER BY timeID DESC LIMIT 1";	
        if($conn->query($sql) === true){
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.location.href='exitemployee.php'
         </SCRIPT>");}
	}else{
	$o=$x-9;
	$sql="UPDATE time SET timeout ='$d1:$m1:$y1',dateout ='$todayh[year]-$todayh[mon]-$todayh[mday]',timeworking ='$x',overtime ='$o'  where timeEID ='$eid' ORDER BY timeID DESC LIMIT 1";	
        if($conn->query($sql) === true){
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.location.href='exitemployee.php'
         </SCRIPT>");}
	}
	}else{
	$sql="UPDATE time SET timeout ='$d1:$m1:$y1',dateout ='$todayh[year]-$todayh[mon]-$todayh[mday]',overtime ='$x' where timeEID ='$eid' ORDER BY timeID DESC LIMIT 1";	
        if($conn->query($sql) === true){
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.location.href='exitemployee.php'
         </SCRIPT>");}
    }  
}else {

	if($sub1==23){
		$sub1=0;	
	if($sub1 >=0 && $sub1 <=8){
	if($x<=9){
		$sql="UPDATE time SET timeout ='$d1:$m1:$y1',dateout ='$todayh[year]-$todayh[mon]-$todayh[mday]',timeworking ='$x' where timeEID ='$eid' ORDER BY timeID DESC LIMIT 1";	
        if($conn->query($sql) === true){
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.location.href='exitemployee.php'
         </SCRIPT>");}
	}else{
	$o=$x-9;
	$sql="UPDATE time SET timeout ='$d1:$m1:$y1',dateout ='$todayh[year]-$todayh[mon]-$todayh[mday]',timeworking ='$x',overtime ='$o'  where timeEID ='$eid' ORDER BY timeID DESC LIMIT 1";	
        if($conn->query($sql) === true){
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.location.href='exitemployee.php'
         </SCRIPT>");}
	}
	}else{
	$sql="UPDATE time SET timeout ='$d1:$m1:$y1',dateout ='$todayh[year]-$todayh[mon]-$todayh[mday]',overtime ='$x' where timeEID ='$eid' ORDER BY timeID DESC LIMIT 1";	
        if($conn->query($sql) === true){
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.location.href='exitemployee.php'
         </SCRIPT>");}
    }  				  
	}else if($sub1 >=0 && $sub1 <=8){
	if($x<=9){
		$sql="UPDATE time SET timeout ='$d1:$m1:$y1',dateout ='$todayh[year]-$todayh[mon]-$todayh[mday]',timeworking ='$x' where timeEID ='$eid' ORDER BY timeID DESC LIMIT 1";	
        if($conn->query($sql) === true){
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.location.href='exitemployee.php'
         </SCRIPT>");}
	}else{
	$o=$x-9;
	$sql="UPDATE time SET timeout ='$d1:$m1:$y1',dateout ='$todayh[year]-$todayh[mon]-$todayh[mday]',timeworking ='$x',overtime ='$o'  where timeEID ='$eid' ORDER BY timeID DESC LIMIT 1";	
        if($conn->query($sql) === true){
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.location.href='exitemployee.php'
         </SCRIPT>");}
	}
	}else{
	$sql="UPDATE time SET timeout ='$d1:$m1:$y1',dateout ='$todayh[year]-$todayh[mon]-$todayh[mday]',overtime ='$x' where timeEID ='$eid' ORDER BY timeID DESC LIMIT 1";	
        if($conn->query($sql) === true){
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.location.href='exitemployee.php'
         </SCRIPT>");}
    }  				  
		}
                 
?>