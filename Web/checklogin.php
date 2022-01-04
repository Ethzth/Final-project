<html>
<?php
session_start();
?>
<meta charset="utf-8">
<?php

$id = $_REQUEST["id"];
$pass = $_REQUEST["pass"];
require("connect.php");

$sql="select * from account where id ='$id'and pw='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	 $row = mysqli_fetch_array($result);
   $_SESSION["id"] = $row["id"];
	 $id = $row["id"];
	 $approve = $row["approve"];

if($approve == 1 ){
	 if($id == admin){
		 header("location:adminpage.php");
	 }else{
		 header("location:calendar.php");
	 }
 }else{
 	echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('ยังไม่ได้รับการอนุมัติจากแอดมิน')
         window.location.href='login.php'
         </SCRIPT>");
 }
    }else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('เลขประจำตัว หรือ รหัสผ่านไม่ถูกต้อง')
        window.location.href='login.php'
        </SCRIPT>");
			}
?>
</form>
</body>
</body>
</html>
