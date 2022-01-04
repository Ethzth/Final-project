<html>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css">	
<script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js">	</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">	</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js">	</script>
<body>
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
	date_default_timezone_set('Asia/Bangkok');
require("connect.php");
$strSQL = "SELECT * FROM employee ";
$objQuery = $conn->query($strSQL);
?>
<center><div style ="width:900px; margin-top:20px; background-color:azure;  border-style: solid;   border-width: 20px; border-color: Azure; " >
	<b><h2 style="color:#56A5EC">Profile of Employees</h2></b>
	<table align="center" id="example" class="table table-striped table-bordered"  cellspacing="0" width="100%">
        <thead>
            <tr>
     <th > <div align="center">Eid </div></th>
    <th> <div align="center">Name </div></th>
	<th > <div align="center">Job </div></th>
    <th  > <div align="center">Tel </div></th>
	<th > <div align="center">SEX</div></th>
	<th><div align="center">Edit</div></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
             <th > <div align="center">Eid </div></th>
    <th > <div align="center">Name </div></th>
	<th > <div align="center">Job </div></th>
  
    <th > <div align="center">Tel </div></th>
	<th> <div align="center">SEX</div></th>
	<th ><div align="center">Edit</div></th>
            </tr>
        </tfoot>
        <tbody>
		<?php
while($objResult =mysqli_fetch_array($objQuery))
{
?>
    <tr>
    <td><div align="center"><?php echo $objResult["eid"];?></div></td>
    <td><?php echo $objResult["name"];?> &nbsp; &nbsp; <?php echo $objResult["surename"];?>  </td>
	<td align="center"><?php echo $objResult["job"];?></td>
	
    <td align="center"><?php echo $objResult["tel"];?></td>    
    <td align="center"><?php echo $objResult["sex"];?></td>
	<td align="center"><form action ="edit.php" method= "POST"> <input type ="text" hidden name="eid"  value="<?php echo $objResult["eid"];?>" > <input type ="submit" value="Edit"  	> </form></td>
    </tr>
<?php	
}
?>
		  
</center>		
        </tbody>
    </table>
	<button type="button"  class="button button3" onClick=javaScript:self.location.href="adminpage.php" type="cancel" >Adminpage</button>
	</div> 
	</body>
	</html>