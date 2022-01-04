<?php
session_start();
date_default_timezone_set('Asia/Bangkok');
$bookmr=$_SESSION["bookmr"];
$floor=$_SESSION["floor"];
$date=$_SESSION["date"];
$roomnumber=$_SESSION["roomnumber"];

?>
<html>
<title>
</title>
<head>
  <div class="nav" >
    <ul class="topnav"style="width:100%;">
    <img src="pic/logo/logo1.png" height="50" width="150">
    <li class="right"><a href="login.php">ออกจากระบบ</a></li>
    <li><a href="calendar.php">ปฏิทิน</a></li>
    </ul>
  </div>
</head>

<style>
.nav{font-family: "ThaiSans Neue" ;}
.nav ul.topnav{font-family:"ThaiSans Neue";}
#calendar {font-family:"Browallia New";}
body {background-color:white;}
body {margin: 0;}

ul.topnav {
  font-size: 10px;
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  box-shadow:0px 0px 8px #000;
  background-color: blue;}

ul.topnav li {float: right;}
ul.topnav img {float: left;margin-left:35px;}
ul.topnav li a {
  display: block;
  text-align:center;
  padding: 9px 16px;
  color: black;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #c59d2e;}
ul.topnav li a.active {background-color:white }
ul.topnav li.right {float: right; border-radius:0px;background-color:#;margin-right:35px;}

@media screen and (max-width: 100%){
  ul.topnav li.right,
  ul.topnav li {float: none;}
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid black;
    text-align: left;
    padding: 5px;
    height: 50px;
    width: 350px;
}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
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
	  width: 100%;
    height: 100%;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button3 {
    background-color: white;
    color: black;
	  width: 100%;
    height: 100%;
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}
</style>

<?php

require('connect.php');
$id=$_SESSION["id"];

?>
<center>
   <h2 style="color:#56A5EC">ตารางเวลา</h2>
</center>
   <table>
   <tr style="background-color: #dddddd;">
      <th colspan="10"><center><?php echo $id; ?> ชั้น :  <?php echo $floor; ?> ห้อง : <?php echo $bookmr; ?> วันที่ : <?php echo $_SESSION["date"]?> </center></th>
   </tr>
   <tr style="background-color: #dddddd;">
      <td colspan="4"><center>เวลา</center></td>
      <td colspan="4"><center>ชื่อผู้จอง</center></td>
   </tr>
<form action ="fillin.php" method= "POST">
<?php
$strSQL = "SELECT * FROM booking  where  date = '$date' and time ='08:00:00' and roomnumber= '$roomnumber' ";
$result = $conn->query($strSQL);
if($result->num_rows > 0) {
   $row = mysqli_fetch_array($result);
   $idbooker= $row["idbooker"];
   $_SESSION["idbooker"] = $idbooker;

   $strSQL = "SELECT * FROM account where id = '$idbooker' ";
   $objQuery = $conn->query($strSQL);
      while($objResult=mysqli_fetch_array($objQuery))
  {
   $bookername = $objResult["name"];
?>
    <tr>
      <td colspan="4"><center>08:00น. - 12:00น.</center></td>
      <td colspan="4"><button  type="cancel"class="button button3"name="time" value="08:00น. - 12:00น. <?php  echo $idbooker ?>"> <?php  echo $bookername ?></button></td>
    </tr>
<?php
}
    }else{
?>
    <tr>
      <td colspan="4"><center>08:00น. - 12:00น.</center></td>
      <td colspan="4"><button  type="cancel"class="button button1"name="time" value="08:00น. - 12:00น."> ว่าง</button></td>
    </tr>
<?php
}

?>
<?php
$strSQL = "SELECT * FROM booking  where  date = '$date' and time ='13:00:00' and roomnumber= '$roomnumber' ";
$result = $conn->query($strSQL);
if ($result->num_rows > 0) {
   $row = mysqli_fetch_array($result);
   $idbooker = $row["idbooker"];
   $_SESSION["idbooker"] = $idbooker;
?>
   <tr>
     <td colspan="4"><center>13:00น. - 17:00น.</center></td>
     <td colspan="4"><button type="cancel"class="button button3"name="time" value="13:00น. - 17:00น. <?php  echo $idbooker ?>"> <?php  echo $bookername ?></button></td>
   </tr>
<?php
    }else{
?>
   <tr>
     <td colspan="4"><center>13:00น. - 17:00น.</center></td>
     <td colspan="4"><button  type="cancel"class="button button1"name="time" value="13:00น. - 17:00น."> ว่าง</button></td>
   </tr>
<?php
          }
?>
<?php
  $strSQL = "SELECT * FROM booking  where  date = '$date'  and roomnumber= '$roomnumber' ";
  $result = $conn->query($strSQL);
  if ($result->num_rows > 0) {
     $row = mysqli_fetch_array($result);
      $idbooker= $row["idbooker"];
      $_SESSION["idbooker"] = $idbooker;
    ?>
    <tr>
      <td colspan="4"><center>08.00น. - 17:00น.(ทั้งวัน)</center></td>
      <td colspan="4"><button class="button button3"name="
        " value="08:00น. - 17:00น. <?php  echo $idbooker ?>">ไม่ว่าง</button></td>
    </tr>
  <?php
}else{
    ?>
  <tr>
    <td colspan="4"><center>08.00น. - 17:00น.(ทั้งวัน)</center></td>
    <td colspan="4"><button  type="cancel"class="button button1"name="time" value="08:00น. - 17:00น."> ว่าง</button></td>
  </tr>
  <?php
}
  ?>

        </form>

      </table>

</html>
