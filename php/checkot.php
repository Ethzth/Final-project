<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
<center>
<?php


$date= $_REQUEST["date"];
echo $date

?>
<form name="test" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
 <table class="imagetable" width="300"  align="center">
    <tr>
<th width="100"> <div align="center"><input type="number" min="1" max="31" value="<?php echo $date ?>" name="date" placeholder="date"  ></div></th>
<th width="100"> <div align="center"><input type="number" min="1" max="12"  name="month" value="<?php echo $month ?>" placeholder="month" ></div></th>
<th width="100"> <div align="center"><input type="number" min="2017" max="2099"  name="year" value="<?php echo $year ?>" placeholder="year" ></div></th>
<th align="center"><input type="submit" name="submit" value="search"></th></tr>
</form>

   <form name="frmMain" action="otcheck.php" method="post">
    <table class="imagetable" width="850"  align="center">
    <tr>

    <th width="100"> <div align="center">Eid </div></th>
    <th width="300"> <div align="center">Name </div></th>
	<th width="100"> <div align="center">Job </div></th>
	<th width="50"> <div align="center">SEX</div></th>
	 <th width="50"> <div align="center">Shift </div></th>
	<th width="100"> <div align="center">check-in </div></th>
	<th width="100"> <div align="center">check-out </div></th>
	<th width="50"> <div align="center">OT/hr</div></th>
    </tr>
<?php



if(isset($_POST['submit'])) {
$i = 0;
while($objResult =mysqli_fetch_array($objQuery))
	{
	$i++;

?>
    <tr>
 <td align="center"><input type="hidden" readonly name="eid[]" id="eid<?=$i;?>" value="<?=$objResult["eid"];?>"></input><?=$objResult["eid"];?></td>
    <td><?php echo $objResult["name"];?> &nbsp; &nbsp; <?php echo $objResult["surename"];?>  </td>
	<td align="center"><?php echo $objResult["job"];?></td>
    <td align="center"><?php echo $objResult["sex"];?></td>
	 <td align="center"><?php echo $objResult["shift"];?></td>
	 <td align="center"><?php echo $objResult["time"];?></td>
    <td align="center"><?php echo $objResult["timeout"];?></td>
	<td align="center"><input type="text" size="4" name="chk[]" id="chk<?=$i;?>"  value="<?=$objResult["overtime"];?>"></td>
    </tr>
<?php
}
}
mysqli_close($conn);
?>
</table>
<br>

<input type="hidden" name="hdnCount" value="<?=$i;?>">
<br><button type="submit" class="button button1" >Edit</button>  <button type="button" class="button button3"  onclick="goToAdminPage()">Cancel</button>  </form>
</center>
<script>
function goToAdminPage(){
	window.location= "adminpage.php";
}
</script>
</body>
</html>
