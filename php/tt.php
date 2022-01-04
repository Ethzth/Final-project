<html>
<head>
</head>
<meta charset="utf-8">

<?php

require('ncon.php'); 
$EmployeeID =$_REQUEST["eid"] ;
session_start();
$sql="select * from employee where EmployeeID ='$EmployeeID'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

 header("Location:showregis.php");
}else{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('ไม่มีข้อมูลในะบบ')
        window.location.href='home.php'
        </SCRIPT>");
}

?> 
</form>
</body>
</body>
</html>