<?php
session_start();
$eid = $_SESSION["eid"];
require("connect.php");
mysqli_set_charset($conn, "utf8");

$sql="select * from employee where eid ='$eid' ";	
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
   $_SESSION['shift']= $row['shift'];
   $_SESSION['salary']= $row['salary'];
 }
 echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.location.href='selecttime.php'
        </SCRIPT>");
}

?>