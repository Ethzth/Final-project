<?php
	date_default_timezone_set('Asia/Bangkok');
require("ncon.php");
$strSQL = "SELECT Name,Surname,Tel,Salary,EmployeeID,TIME(time) as tuuTime,DATE(time) as tuuDate FROM employee ";
$objQuery = $conn->query($strSQL);





?>
<center><div style ="width:900px; margin-top:20px; background-color:azure;  border-style: solid;   border-width: 20px; border-color: Azure; " >
	<b><h2 style="color:#56A5EC">Profile of Employees</h2></b>
	<table align="center" id="example" class="table table-striped table-bordered"  cellspacing="0" width="100%" border="2px">
        <thead>
            <tr>
     
    <th > <div align="center">Name </div></th>
	<th > <div align="center">Surname </div></th>  
    <th> <div align="center">Tel </div></th>
	<th> <div align="center">Salary</div></th>
	<th ><div align="center">EmployeeID</div></th>
	<th ><div align="center">Time & Date</div></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
     
        </tfoot>
        <tbody>
			<?php
while($objResult =mysqli_fetch_array($objQuery))
{
?>
    <tr>
    <td><div align="center"><?php echo $objResult["Name"];?></div></td>
    <td><div  align="center"><?php echo $objResult["Surname"];?></div>  </td>
	<td align="center"><?php echo $objResult["Tel"];?></td>
	<td><div align="center"><?php echo $objResult["Salary"];?></div></td>
    <td align="center"><?php echo $objResult["EmployeeID"];?></td>
     <td align="center"><?php echo $objResult["tuuTime"];?>&nbsp;&nbsp;<?php echo $objResult["tuuDate"];?></td>
    </tr>
	
	
<?php	
}
?>
		  
	
        </tbody>
    </table>
	<button type="button"  class="button button3" onClick=javaScript:self.location.href="regis.php" type="cancel" >กลับสู่หน้าลงทะเบียน</button>
	</div> 
	</body>
	</html>