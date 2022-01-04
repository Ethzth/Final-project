

<style>

	body { 
    
    background-image:url( pic/scglogistics.jpg);
    background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
-o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
}
</style>
<?php
$todayh = getdate(); 
$d1 = $todayh['hours'];
$m1 = $todayh['minutes'];
$y1 = $todayh['seconds'];
session_start();
$eid = $_SESSION["eid"];
require("connect.php");
mysqli_set_charset($conn, "utf8");

$sql="select * from time where timeEID ='$eid' and timeout = '00:00:00' and  dateout = '0000-00-00' ORDER BY timeID DESC LIMIT 1";	
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br> <br>";
  
  echo    "<span style=cursor:pointer>";
  echo 	" <center> <img src=pic/clock-out.png         onClick=javaScript:self.location.href='selectshift.php' width=350px ></img>&nbsp;&nbsp;";
  echo  " <img src=pic/cancel.png        onClick=javaScript:self.location.href='Test.php'  width=350px ></img></center>";
  echo  "</span>";
  echo  "</div>";
  echo  "</body>";
  } else{
	   echo "<body>" ;
 echo "<div class=container >" ;
 echo "<br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br> <br>";  
 echo    "<span style=cursor:pointer>";
 echo 	"<center> <img src=pic/clock-in.png    onClick=javaScript:self.location.href='time.php' width=350px ></img>&nbsp;&nbsp;";
 echo  " <img src=pic/cancel.png        onClick=javaScript:self.location.href='Test.php'  width=350px ></img></center>";
 echo  "</span>";
  

}
?>






