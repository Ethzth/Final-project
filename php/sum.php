<?php
session_start();
require("connect.php");
$ot=0;
$summ = 0 ;
	$sql="select DISTINCT e.eid,t.sumotm,e.salary from time t,employee e where  e.eid = t.timeEID  ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	 while($row = $result->fetch_assoc()) {

$eid=$row["eid"];
$sum=$row["sumotm"];
$salary=$row["salary"];
$ot=(($salary/240)*1.5)*$sum;
$a=number_format($ot, 2, '.', '');
$summ=$salary+$a;


  $strSQL = "UPDATE time SET sumot ='$a' , sum ='$summ' where timeEID = '$eid'  ";
		$objQuery = $conn->query($strSQL);

}
}
echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.location.href='sumall.php'
  </SCRIPT>");
?>
