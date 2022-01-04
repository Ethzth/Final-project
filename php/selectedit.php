<html>
<head>
<title></title>
</head>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css">	
<script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js">	</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">	</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js">	</script>
<body>
<script>
	$(document).ready(function() {
    $('#example').DataTable();
    } );
	function goToAdminPage(){
	window.location= "check01.php";
}
	</script>
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

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
	width: 15%;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button3 {
    background-color: white; 
    color: black; 
	width: 15%;
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}
<style type="text/css">
table.imagetable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color:#56A5EC;
	border-collapse: collapse;
}
table.imagetable th {
	background:#AFEEEE url('cell-blue.jpg');
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #56A5EC;
	
}
table.imagetable td {
	background:#dcddc0 url('cell-grey.jpg');
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #56A5EC;
}
  

</style>

</style>
<script language="javascript">
function CheckNum(){
		if (event.keyCode < 48 || event.keyCode > 57){
		      event.returnValue = false;
	    	}
	}
</script>

<center>
<?php
session_start();
require("connect.php");
$date= $_REQUEST["date"];
 
   
  
$strSQL="select e.eid,e.name,e.surename,e.job,e.sex,e.tel,t.overtime,t.time,t.timeout,e.shift from time t,employee e where  e.eid = t.timeEID  and date ='$date'";	
$objQuery = $conn->query($strSQL);
$_SESSION["date"]=$date ;

?>


<center>

<div style ="width:1100; margin-top:20px; background-color:azure;  border-style: solid;   border-width: 20px; border-color: Azure; " >
   <form action="otcheck.php" method="post">
  <table align="center" id="example" class="table table-striped table-bordered"  cellspacing="0" width="100%">
	<b><h2 style="color:#56A5EC; margin-top: 7 px">Overtime of Employees in <?php echo $date?></h2></b>
       <thead>
     <tr>
    <th > <div align="center">Eid </div></th>
    <th > <div align="center">Name </div></th>
	<th > <div align="center">Job </div></th> 
	<th> <div align="center">SEX</div></th>
	<th > <div align="center">Shift </div></th>
	<th > <div align="center">check-in </div></th>
	<th > <div align="center">check-out </div></th>
	<th > <div align="center">OT/hr</div></th>
    </tr>
	 </thead>
		<tfoot>
		 <tr>
      <th > <div align="center">Eid </div></th>
    <th > <div align="center">Name </div></th>
	<th > <div align="center">Job </div></th> 
	<th> <div align="center">SEX</div></th>
	 <th > <div align="center">Shift </div></th>
	<th > <div align="center">check-in </div></th>
	<th > <div align="center">check-out </div></th>
	<th > <div align="center">OT/hr</div></th>
	  </tr>
	  </tfoot>
	     <tbody>
<?php

$i = 0;
while($objResult=mysqli_fetch_array($objQuery))
	{
	$i++;	
?>
   <tr>
 <td align="center"><input type="hidden" readonly name="eid[]" id="eid<?=$i;?>" value="<?php echo $objResult["eid"];?>"></input><?php echo $objResult["eid"];?></td>
    <td><?php echo $objResult["name"];?> &nbsp; &nbsp; <?php echo $objResult["surename"];?>  </td>
	<td align="center"><?php echo $objResult["job"];?></td>
    <td align="center"><?php echo $objResult["sex"];?></td>
	<td align="center"><?php echo $objResult["shift"];?></td>
	<td align="center"><?php echo $objResult["time"];?></td>
    <td align="center"><?php echo $objResult["timeout"];?></td>
	<td align="center"><input type="text" size="4" name="chk[]" id="chk<?=$i;?>" onKeyPress="CheckNum()" value="<?php echo $objResult["overtime"];?>"><p hidden><?php echo $objResult["overtime"];?></p></td>
    
	</tr>

<?php	
}

?>
 <tbody>
</table>
<input type="hidden" name="hdnCount" value="<?=$i;?>">
<br><button type="submit" class="button button1" >Edit</button>  <button type="button" class="button button3"  onclick="goToAdminPage()">Cancel</button> 
 </form>
</center>

</div>
</body>
</html>