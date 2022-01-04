<html>
<head>
</head>
<body>
<?php

require("connect.php");
		
	for($i=0;$i<count($_POST["chk"]);$i++)
	{
		for($i=0;$i<count($_POST["eid"]);$i++)
	{
		if($_POST["chk"][$i] != "")
		{
			if($_POST["eid"][$i] != "")
				
		{
			
			 $strSQL = "UPDATE employee SET shift ='".$_POST["chk"][$i]."'where eid = '".$_POST["eid"][$i]."' ";
			$objQuery =$conn->query($strSQL);
	
		}
		}
	}
	}	
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.location.href='editshift.php'
       </SCRIPT>");





?>
</body>
</html>