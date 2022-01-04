<html>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css">
<script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js">	</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">	</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js">	</script>
<head>
</head>
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

.form fieldset{border:0px; padding:0px; margin:0px;}

.form p.contact { font-size: 12px; margin:0px 0px 10px 0;line-height: 14px; font-family:Arial, Helvetica;}


.form input[type="text"]
.form input[type="submit"] {}
.form input[type="email"] { width: 20%; }

.form input[type="password"] { width: 35%; }

.form input[type="file"] { width: 35%; }
.form label { color: #000; font-weight:bold;font-size: 12px;font-family:Arial, Helvetica; }


.form input, textarea { background-color: rgba(255, 255, 255, 0.4); border: 1px solid rgba(122, 192, 0, 0.15); padding: 7px; font-family: Keffeesatz, Arial; color: #4b4b4b; font-size: 14px; -webkit-border-radius: 5px; margin-bottom: 15px; margin-top: -10px; }
.form input:focus, textarea:focus { border: 1px solid #ff5400; background-color: rgba(255, 255, 255, 1); }

.form .select-style {

  -webkit-appearance: button;

  -webkit-border-radius: 2px;

  -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);

  -webkit-padding-end: 20px;

  -webkit-padding-start: 2px;

  -webkit-user-select: none;

  background-image: url(images/select-arrow.png),

    -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);

  background-position: center right;

  background-repeat: no-repeat;

  border: 0px solid #FFF;

  color: #555;

  font-size: inherit;

  margin: 0;

  overflow: hidden;

  padding-top: 5px;

  padding-bottom: 5px;

  text-overflow: ellipsis;

  white-space: nowrap;}

.form .gender {

   width: 35%;

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
	border-color: #999999;
	border-collapse: collapse;
}
table.imagetable th {
	background:#b5cfd2 url('cell-blue.jpg');
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #999999;

}
table.imagetable td {
	background:#dcddc0 url('cell-grey.jpg');
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #999999;
}


</style>

</style>
<script language="javascript">
function CheckNum1(){
		if (event.keyCode < 49 || event.keyCode > 51){
		      event.returnValue = false;
	    	}
	}
</script>
	<script>
	$(document).ready(function() {
    $('#example').DataTable();
    } );
	</script>
<?php
require("connect.php");
$strSQL = "SELECT * FROM employee ";
$objQuery = $conn->query($strSQL);
?>
 <form  action="updateshift.php" method="post">

<center><div style ="width:900px; margin-top:20px; background-color:azure;  border-style: solid;   border-width: 20px; border-color: Azure; " >
                           <b><h2 style="color:#56A5EC" >EditShift</h2></b>
	<table align="center" id="example" class="table table-striped table-bordered"  cellspacing="0" width="100%">
       <thead>
    <tr>
    <th width="100"> <div align="center">Eid </div></th>
    <th width="300"> <div align="center">Name </div></th>
	<th width="100"> <div align="center">Job </div></th>
    <th width="100"> <div align="center">Salary </div></th>
    <th width="100"> <div align="center">Tel </div></th>
	<th width="50"> <div align="center">SEX</div></th>
	<th width="50"> <div align="center">shift</div></th>
    </tr>
	</thead>

		<tfoot>
		  <tr>
    <th width="100"> <div align="center">Eid </div></th>
    <th width="300"> <div align="center">Name </div></th>
	<th width="100"> <div align="center">Job </div></th>
    <th width="100"> <div align="center">Salary </div></th>
    <th width="100"> <div align="center">Tel </div></th>
	<th width="50"> <div align="center">SEX</div></th>
	<th width="50"> <div align="center">shift</div></th>
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
    <td align="center"><input type="hidden" readonly name="eid[]" id="eid<?=$i;?>" value="<?=$objResult["eid"];?>">
    </input><?=$objResult["eid"];?></td>
    <td><?php echo $objResult["name"];?> &nbsp; &nbsp; <?php echo $objResult["surename"];?>  </td>
    <td align="center"><?php echo $objResult["job"];?></td>
    <td><div align="center"><?php echo $objResult["salary"];?></div></td>
    <td align="center"><?php echo $objResult["tel"];?></td>
    <td align="center"><?php echo $objResult["sex"];?></td>
    <td align="center"><input type="number" name="chk[]" id="chk<?=$i;?>" min="1" max="3"  required  value="<?php echo $objResult["shift"];?>" onKeyPress="CheckNum1()" ><p hidden><?php echo $objResult["shift"];?></p> </td>

    </tr>
<?php
}
?>
   <tbody>
</table>

<br>
<input type="hidden" name="hdnCount" value="<?=$i;?>">

<button type="submit" class="button button1" >Edit</button>  <button  type="button" class="button button3"  onclick=javascript:window.location='adminpage.php' type="cancel" >Cancel</button>
</form>

</body>
</html>
