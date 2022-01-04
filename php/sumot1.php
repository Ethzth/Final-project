 <?php
session_start();
$month=$_SESSION["month"] ;
$year=$_SESSION["year"];
require("connect.php");
$b1=0;
$b2=0;
if($month<=9){
	$s="0";
	$month="$s$month";
	$sql="SELECT DISTINCT timeEID from time ";	
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	 while($row = $result->fetch_assoc()) {
		  $eid=$row['timeEID'];
		 
		  $strSQL1 = "SELECT DISTINCT sumot FROM time  where date  LIKE '$year-$month%' and timeEID= '$eid'   ";
	$objQuery = $conn->query($strSQL1);
	 while($objResult =mysqli_fetch_array($objQuery))
	{
    $b2+= $objResult['sumot'] ;
	
	}

	 }
}
	$_SESSION["b2"]= $b2 ;
	
	echo ("<SCRIPT LANGUAGE='JavaScript'>
   window.location.href='tuu2.php'
  	  </SCRIPT>");
	  }else if($month>=10){
	  $sql="SELECT DISTINCT timeEID from time ";	
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	 while($row = $result->fetch_assoc()) {
		  $eid=$row['timeEID'];
		 
		  $strSQL1 = "SELECT DISTINCT sumot FROM time  where date  LIKE '$year-$month%' and timeEID= '$eid'   ";
	$objQuery = $conn->query($strSQL1);
	 while($objResult =mysqli_fetch_array($objQuery))
	{
    $b2+= $objResult['sumot'] ;
	
	}
	 }
}
	$_SESSION["b2"]= $b2 ;
	
	echo ("<SCRIPT LANGUAGE='JavaScript'>
   window.location.href='tuu2.php'
  	  </SCRIPT>");
	  }
?>