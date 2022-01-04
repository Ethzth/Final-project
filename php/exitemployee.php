<html>
<head>
</head>
<meta charset="utf-8">
<style>
body { 
    
    background-image:url( pic/scglogistics.jpg);
    background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
-o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
}
.circle{ 
    height: 200px;  
    width: 200px;  
    border: 3px solid #fff; 
    border-radius: 50%; 
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); 
}
h3 {
    font-family: Verdana, sans-serif;
	 color: #4682B4;
}

</style>
<body>
<center>
<h1> Profile </h1>
</center>
<?php
date_default_timezone_set('Asia/Bangkok');
session_start();
require('connect.php'); 
 $eid=$_SESSION["eid"];
$sql="select * from employee where eid ='$eid'";
$objQuery = $conn->query($sql);
	while($objResult=mysqli_fetch_array($objQuery))
{
	?>	
	<center>
		<h3>
		<img class="circle" src="myfile/<?php echo $objResult["pic"];?>"><br><br>
		ชื่อ  : &nbsp;&nbsp;
		
		 <?php echo $objResult["name"];?>&nbsp;&nbsp;&nbsp;
	     <?php echo $objResult["surename"];?>
		<br>
		ตำแหน่งงาน        : &nbsp;&nbsp;
		<?php echo $objResult["job"];?>
		<br>
		เบอร์โทร          : &nbsp;&nbsp; 
	    <?php echo $objResult["tel"];?>
		<br>
		<br>
    <img  src="pic/unsucess.png"    width="170" height="85" > ;
		</center>
		
<?php	
}	
?> 


</body>

</html>
<META HTTP-EQUIV="Refresh" CONTENT="3;URL=logout.php">