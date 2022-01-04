
 <div style = "width:800px; height:100px; ">



<?php

session_start();
require('ncon.php'); 



$strSQL = "SELECT * FROM employee ";
$objQuery = $conn->query($strSQL);

	while($objResult=mysqli_fetch_array($objQuery))
{
	?>	
	     
		<h3>
		 <div style ="width:200px; height:100px;  ">
		<img class="circle" src="myfile/<?php echo $objResult["pic"];?>" width="200" height="100"><br><br>
		 </div>   
	
<?php	
}	
?> 
  </div>