<html>
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


.form input[type="text"] { width: 20%; }
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
	width: 10%;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button3 {
    background-color: white;
    color: black;
	width: 10%;
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
<p hidden></p>
<?php
require("connect.php");
$strSQL = "SELECT * FROM employee ";
$objQuery = $conn->query($strSQL);
$Num_Rows=$objQuery->num_rows;
$Per_Page =10;
$Page = $_GET["Page"];
if(!$_GET["Page"]){
	$Page=1;
}
$Prev_Page = $Page-1;
$Next_Page = $Page+1;
$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows<=$Per_Page)
{
	$Num_Pages =1;
}
else if(($Num_Rows % $Per_Page)==0)
{
	$Num_Pages =($Num_Rows/$Per_Page) ;
}
else
{
	$Num_Pages =($Num_Rows/$Per_Page)+1;
	$Num_Pages = (int)$Num_Pages;
}

$strSQL .=" order  by eid ASC LIMIT $Page_Start , $Per_Page";
$objQuery = $conn->query($strSQL);
?>



    <table class="imagetable" width="800" border="0.5" align="center">
    <tr>
    <th width="100"> <div align="center">Eid </div></th>
    <th width="300"> <div align="center">Name </div></th>
	<th width="100"> <div align="center">Job </div></th>
    <th width="100"> <div align="center">Salary </div></th>
    <th width="100"> <div align="center">Tel </div></th>

	<th width="50"> <div align="center">SEX</div></th>
	<th width="50"> <div align="center">Edit</div></th>

    </tr>
<?php
while($objResult =mysqli_fetch_array($objQuery))
{
?>
    <tr>
    <td><div align="center"><?php echo $objResult["eid"];?></div></td>
    <td><?php echo $objResult["name"];?> &nbsp; &nbsp; <?php echo $objResult["surename"];?>  </td>
	<td align="center"><?php echo $objResult["job"];?></td>
	<td><div align="center"><?php echo $objResult["salary"];?></div></td>
    <td align="center"><?php echo $objResult["tel"];?></td>

    <td align="center"><?php echo $objResult["sex"];?></td>
	<td align="center"><form action ="edit.php" method= "POST"> <input type ="text" hidden name="eid"  value="<?php echo $objResult["eid"];?>" > <input type ="submit" value="Edit"  	> </form></td>
    </tr>
<?php
}
?>
</table>
<center>
<br>
Total <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> Page :
<?php
if($Prev_Page)
{
	echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
}

for($i=1; $i<=$Num_Pages; $i++){
	if($i != $Page)
	{
		echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
	}
	else
	{
		echo "<b> $i </b>";
	}
}
if($Page!=$Num_Pages)
{
	echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
}

?>
</center>
</body>
</html>
