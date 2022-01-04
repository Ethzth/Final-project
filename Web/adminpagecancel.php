<?php
  session_start();
if (empty($_SESSION["id"])){
 echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('กรุณาล็อคอิน')
        window.location.href='login.php'
        </SCRIPT>");
}else{
  require("connect.php");
?>
<html>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<body>
<div class="nav" >
<ul class="topnav"style="width:100%;">
  <img src="pic/logo/logo1.png" height="50" width="150">
  <li class="right"><a href="logout.php">ออกจากระบบ</a></li>
  <li class="right"><a>Admin</a></li>
  <li class="right"><a href="adminpageuserlist.php">รายชื่อผู้ใช้</a></li>
  <li class="right"><a href="adminpageapprove.php">อนุมัติการสมัครสมาชิก</a></li>
  <li class="right"><a href="adminpagecancel.php">ยกเลิกการจองของผู้ใช้</a></li>
  <li class="right"><a href="adminpage.php">หน้าแรก</a></li>


</ul>
</div>
<style>
body {
  background-image:url( pic/bg.jpg);
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    -o-background-size: 100% 100%, auto;
    -moz-background-size: 100% 100%, auto;
    -webkit-background-size: 100% 100%, auto;
    background-size: 100% 100%, auto;
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
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
	  width: auto;
    height: auto;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button3 {
    background-color: white;
    color: black;
    border: 2px solid #f44336;
    width: auto;
    height: auto;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}
</style>
<style>
		.nav{font-family: "ThaiSans Neue" ;}
		.nav ul.topnav{font-family:"ThaiSans Neue";}
		#calendar {font-family:"Browallia New";}
		body {background-color:white;}
		body {margin: 0;}

		ul.topnav {
			font-size: 20px;
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			box-shadow:0px 0px 8px #000;
      background-color: #F0F8FF;}

    ul.topnav li {float: right;}
    ul.topnav img {float: left;margin-left:35px;}
    ul.topnav li a {
      display: block;
      text-align:center;
      padding: 9px 16px;
      color: black;
      text-decoration: none;
    }

    ul.topnav li a:hover:not(.active) {background-color: #6495ED;}
		ul.topnav li a.active {background-color:white }
		ul.topnav li.right {float: right; border-radius:0px;background-color:#;margin-right:35px;}

		@media screen and (max-width: 100%){
			ul.topnav li.right,
			ul.topnav li {float: none;}
		}
</style>

<center>
<h1 align="center" style=" margin-top:2%; width:98%; height:auto; background-color:#AFEEEE; opacity:0.97;"> ยกเลิกการจองของผู้ใช้ </h1>
<table align="center" class="table table-striped table-bordered" style ="width:98%; height:auto; background-color:#AFEEEE; opacity:0.97; cellspacing=0 ">

  <tr>
    <th> <div align="center">วันที่.</div></th>
    <th> <div align="center">ชั้น</div></th>
    <th> <div align="center">เลขที่ห้อง </div></th>
    <th> <div align="center">เวลา</div></th>
    <th> <div align="center">ผู้จอง</div></th>
    <th> <div align="center">แก้ไข</div></th>
  </tr>

  <tbody>
  <?php
      $strSQL = "SELECT * FROM booking";
      $objQuery1 = $conn->query($strSQL);
      while($objResult =mysqli_fetch_array($objQuery1))
      {
      $id = $objResult["idbooker"];

      $strSQL = "SELECT * FROM account where id = '$id' ";
      $result = $conn->query($strSQL);
      if($result->num_rows > 0) {
         $row = mysqli_fetch_array($result);
         $bookername = $row["name"];
         $bookerlastname = $row["lastname"];
  ?>

  <tr>
      <td align="center"><?php echo $objResult["date"]?></td>
      <td align="center"><?php echo $objResult["floor"]?></td>
      <td align="center"><?php echo $objResult["roomnumber"]?></td>
      <td align="center"><?php echo $objResult["time"]?></td>
      <td align="center"><?php echo $bookername?> <?php echo $bookerlastname?> </td>
      <td align="center">
      <form action ="admincancelbook.php" method= "POST">
          <input type ="text"  hidden name="date"  value="<?php echo $objResult["date"]?>">
          <input type ="text"  hidden name="floor"  value="<?php echo $objResult["floor"]?>">
          <input type ="text"  hidden name="roomnumber"  value="<?php echo $objResult["roomnumber"]?>">
          <input type ="text"  hidden name="time"  value="<?php echo $objResult["time"]?>">
          <input type ="text"  hidden name="id"  value="<?php echo $id?>">
            <button  type="submit"class="button button3" > ยกเลิกการจอง </button>
      </form>
      </td>

      <?php
    }}}
      ?>
    </tr>
</center>
      </tbody>
  </table>
</div>
</body>
</html>
