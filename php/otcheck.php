<html>
<head>
</head>
<body>
<?php
  session_start();
$date = $_SESSION["date"];

require("connect.php");
		
	for($i=0;$i<count($_POST["chk"]);$i++)
	{
		for($i=0;$i<count($_POST["eid"]);$i++)
	{
		if($_POST["chk"][$i] != "")
		{
			if($_POST["eid"][$i] != "")
				
		{
			 $strSQL = "UPDATE time SET overtime ='".$_POST["chk"][$i]."'where timeEID = '".$_POST["eid"][$i]."' and date ='$date' ";
			//$objQuery =$conn->query($strSQL);
	if ($conn->query($strSQL) === TRUE) {
		echo $strSQL ;
	} else {
		echo "Error updating record: " . $conn->error;
	}
		}
		}
	}
	}	
echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.location.href='check01.php'
   </SCRIPT>");





?>
</body>
</html>
