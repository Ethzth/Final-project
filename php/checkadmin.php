<html>
<head>
</head>
<meta charset="utf-8">
 
<?php
session_start();
$id = $_REQUEST["id"];
$pass = $_REQUEST["pass"];


require("connect.php");
	
mysqli_set_charset($conn, "utf8");

$sql="select * from admin where id ='$id'and pass='$pass'";	
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	 $row = mysqli_fetch_array($result);
   $_SESSION["id"] = $row["id"];
  header("location:adminpage.php");

    }else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Username หรือ Password ผิดพลาด')
        window.location.href='adminlogin.php'
        </SCRIPT>");

}

?> 
</form>
</body>
</body>
</html>