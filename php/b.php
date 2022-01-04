<html>
<head>
</head>
<body>
<?php
session_start();
$month =$_REQUEST["month"] ;
$year=$_REQUEST["year"] ;
$_SESSION["month"]=$month ;
$_SESSION["year"]=$year;
require("connect.php");
	$sql="select * from employee";	
	$result = $conn->query($sql);
if($month<=9){
	$s="0";
	$month="$s$month";
if ($result->num_rows > 0) {
	 while($row = $result->fetch_assoc()) {
        $eid=$row['eid'];
		

$sql="select sum(overtime) from time where timeEID = '$eid' and date  LIKE  '$year-$month%' ";	

$objQuery = $conn->query($sql);
 while($objResult =mysqli_fetch_array($objQuery))
	{
	
        $sum=$objResult["sum(overtime)"];
		
        $strSQL = "UPDATE time SET sumotm ='$sum' where timeEID = '$eid' ";
		$objQuery1 = $conn->query($strSQL);
	
}
}
}
  
}else if($month>=10){
	$month="$month";
	if ($result->num_rows > 0) {
	 while($row = $result->fetch_assoc()) {
        $eid=$row['eid'];
		

$sql="select sum(overtime) from time where timeEID = '$eid' and date  LIKE  '$year-$month%' ";	

$objQuery = $conn->query($sql);
 while($objResult =mysqli_fetch_array($objQuery))
	{
	
        $sum=$objResult["sum(overtime)"];
		
        $strSQL = "UPDATE time SET sumotm ='$sum' where timeEID = '$eid' ";
		$objQuery1 = $conn->query($strSQL);
	
}
}
}
}
	echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.location.href='sum.php'
       </SCRIPT>");

?>
</body>
</html>