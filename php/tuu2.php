<html>

<body>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css">	
<script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js">	</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">	</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js">	</script>
</body>
<style>
body { 
    
    background-image:url( pic/scglogis.png);
    background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
-o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
}
 .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: auto;
    margin-right: auto;
   vertical-align: middle;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}


.button3 {
    background-color: white; 
    color: black; 
	width: 20%;
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}
</style>
	<script>
	$(document).ready(function() {
    $('#example').DataTable();
    } );
	</script>
	<?php
$ot=0;
session_start();
$month =$_SESSION["month"];
$year =$_SESSION["year"];
$b1=$_SESSION["b1"];
$b2=$_SESSION["b2"];
require("connect.php");
if($month<=9){
	$s="0";
	$month="$s$month";
$strSQL = "SELECT DISTINCT t.timeEID, e.* ,t.sumot,t.sum FROM employee e, time t where t.timeEID=e.eid  and  date  LIKE '$year-$month%'";
$objQuery = $conn->query($strSQL);
}else if($month>=10){
$strSQL = "SELECT DISTINCT t.timeEID, e.* ,t.sumot,t.sum FROM employee e, time t where t.timeEID=e.eid  and  date  LIKE '$year-$month%'";
$objQuery = $conn->query($strSQL);

	 
}

?>

<center><div style ="width:900px; margin-top:20px; background-color:azure;  border-style: solid;   border-width: 20px; border-color: Azure; " >
	<table align="center" id="example" class="table table-striped table-bordered"  cellspacing="0" width="100%">
	<div style="width:300px;" >
	<b><h2 style="color:#56A5EC">Salary of Employees</h2></b>
	</div>
	<div style ="margin-left:85% ">
	<a href="pdf.php" > <p style=" color:red;">PDF</p></a>
	</div>
        <thead>
     <tr>
    <th width="100"> <div align="center">Eid </div></th>
    <th width="300"> <div align="center">Name </div></th>
	<th width="100"> <div align="center">Job </div></th>
	<th width="50"> <div align="center">SEX</div></th>
    <th width="100"> <div align="center">Salary </div></th>
    <th width="100"> <div align="center">OT</div></th>
	 <th width="100"> <div align="center">SumOT</div></th>

    </tr>
       </thead>
        
		<tfoot>
    <th width="100"> <div align="center">Eid </div></th>
    <th width="300"> <div align="center">Name </div></th>
	<th width="100"> <div align="center">Job </div></th>
	<th width="50"> <div align="center">SEX</div></th>
    <th width="100"> <div align="center">Salary </div></th>
    <th width="100"> <div align="center">OT</div></th>
	 <th width="100"> <div align="center">SumOT</div></th>
	  </tr>
	  </tfoot>
	     <tbody>
	<?php
while($objResult =mysqli_fetch_array($objQuery))
{
	
?>
	
    </tr>
    <tr>
    <td><div align="center"><?php echo $objResult["eid"];?></div></td>
    <td><?php echo $objResult["name"];?> &nbsp; &nbsp; <?php echo $objResult["surename"];?>  </td>
	<td align="center"><?php echo $objResult["job"];?></td>
	<td align="center"><?php echo $objResult["sex"];?></td>
	<td><div align="center"><?php echo $objResult["salary"];?></div></td>
    <td align="center"><?php echo $objResult["sumot"]; ?></td>
	<td align="center"><?php echo $objResult["sum"];?></td>
	
 <?php

}

?>  
	 </tr>
   <tbody>

</table>


</div>
</body>
</html>

