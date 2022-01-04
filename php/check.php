<html>
<head>
</head>
<meta charset="utf-8">

<?php

require('connect.php'); 
$eid = $_REQUEST["eid"];
session_start();
$_SESSION["eid"] = $eid;
$sql="select * from employee where eid ='$eid'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

 header("Location:selectstatus.php");
}else{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('ไม่มีข้อมูลในะบบ')
        window.location.href='Test.php'
        </SCRIPT>");
}

?> 
</form>
</body>
</body>
</html>