<?php
  session_start();
if (empty($_SESSION["id"])){
 echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('กรุณาล็อคอิน')
        window.location.href='login.php'
        </SCRIPT>");
}else{

  require('connect.php');
  $id=$_REQUEST["id"];
  $_SESSION["id"] = $id;
  $strSQL = "SELECT * FROM account where id = '$id' ";
  $objQuery = $conn->query($strSQL);
  while($objResult=mysqli_fetch_array($objQuery))
  {

  ?>

<html>
<div class="nav" >
<ul class="topnav"style="width:100%;">
  <img src="pic/logo/logo1.png" height="50" width="150">
  <li class="right"><a href="logout.php">ออกจากระบบ</a></li>
  <li class="right"><a href="adminpageuserlist.php">รายชื่อผู้ใช้</a></li>
  <li class="right"><a href="adminpageapprove.php">อนุมัติการสมัครสมาชิก</a></li>
  <li class="right"><a href="adminpagecancel.php">ยกเลิกการจองของผู้ใช้</a></li>
  <li class="right"><a href="adminpage.php">หน้าแรก</a></li>
</ul>
</div>
<meta charset="utf-8">
<style>
body {
    background-image:url( pic/scglogis.png);
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    -o-background-size: 100% 100%, auto;
    -moz-background-size: 100% 100%, auto;
    -webkit-background-size: 100% 100%, auto;
    background-size: 100% 100%, auto;
}

.form fieldset{border:0px; padding:0px; margin:0px;}
.form p.contact { font-size: 12px; margin:0px 0px 10px 0;line-height: 14px; font-family:Arial, Helvetica;}
.form input[type="text"] { width: 35%; border-color: #56A5EC; }
.form input[type="eid"] { width: 35%;border-color: #56A5EC; }
.form select { width: 35%;  height: 5%;   border-color: #56A5EC; }
.form input[type="email"] { width: 35%;border-color: #56A5EC; }
.form input[type="password"] { width: 35%; border-color:#56A5EC;}
.form input[type="file"] { width: 35%;border-color: #56A5EC; }
.form label { color: #000; font-weight:bold;font-size: 12px;font-family:Arial, Helvetica; }
.form input, textarea { background-color: rgba(255, 255, 255, 0.4); border: 1px solid rgba(122, 192, 0, 0.15); padding: 7px; font-family: Keffeesatz, Arial; color: #4b4b4b; font-size: 14px; -webkit-border-radius: 5px; margin-bottom: 15px; margin-top: -10px; }
.form input:focus, textarea:focus { border: 1px solid #ff5400; background-color: rgba(255, 255, 255, 1); }
.form .select-style {

  -webkit-appearance: button;

  -webkit-border-radius: 2px;

  -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);

  -webkit-padding-end: 20px;

  -webkit-padding-start: 2px;

  -webkit-user-select: none;

  background-image: url(images/select-arrow.png),

    -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);

  background-position: center right;

  background-repeat: no-repeat;

  border: 0px solid #FFF;

  color: #555;

  font-size: inherit;

  margin: 0;

  overflow: hidden;

  padding-top: 5px;

  padding-bottom: 5px;

  text-overflow: ellipsis;

  white-space: nowrap;}

.form .gender {

   width: 35%;

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
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
	  width: auto;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button3 {
    background-color: white;
    color: black;
	  width: auto;
    border: 2px solid #f44336;
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
<script language="javascript">
function CheckNum(){
		if (event.keyCode < 48 || event.keyCode > 57){
		      event.returnValue = false;
	    	}
	}
</script>

<body>

<center>
<div class="form" style ="width:900px;  margin-top:20px; background-color:azure;  border-style: solid;  border-width: 20px; border-color: Azure; " >

<b><h2 style="color:#56A5EC; margin-left:30px; margin-top:15px;">แก้ไขข้อมูลผู้ใช้</h2></b>

<form id="edituserinfo" action="adminupdateedituserlist.php"
method="post">


<p class="contact"></p>
วัน/เวลาที่สมัคร :
    <?php echo  $objResult["regisdate"];?><br><br>

<p class="contact"><label for="name"></label></p>
ชื่อ : &nbsp;&nbsp;
    <input name="name" required="" type="text" maxlength="100" value="<?php echo $objResult["name"];?>">

<p class="contact"><label for="lastname"></label></p>
นามสกุล : &nbsp;&nbsp;
    <input name="lastname" required="" type="text" maxlength="100" value="<?php echo $objResult["lastname"] ?>">

<p class="contact"><label for="sex"></label></p>
เพศ : &nbsp;&nbsp;
    <select id="sex" name="sex" >
        <?php   if( $objResult["sex"] == ชาย){	?>
        <option value="<?php echo $objResult["sex"];?>">ชาย</option>
        <option value="หญิง">หญิง</option>
        <?php
      }else{ ?>
        <option value="<?php echo $objResult["sex"];?>">หญิง</option>
        <option value="ชาย">ชาย</option>
      <?php    } ?>
    </select>
<p class="contact"><label for="email"></label></p>

Email : &nbsp;&nbsp;
    <input name="email" required="" type="text" maxlength="100" value="<?php echo $objResult["email"] ?>">

<p class="contact"><label for="falcuty"></label></p>
คณะ :  &nbsp;&nbsp;
    <select id="faculty" name="faculty" >
    <option value="<?php echo $objResult["faculty"] ?>"><?php echo $objResult["faculty"] ?></option>
    <option value="คณะบริหารธุรกิจ">คณะบริหารธุรกิจ</option>
    <option value="คณะบัญชี">คณะบัญชี</option>
    <option value="คณะเศรษฐศาสตร์">คณะเศรษฐศาสตร์</option>
    <option value="คณะมนุษยศาสตร์และประยุกต์ศิลป์">คณะมนุษยศาสตร์และประยุกต์ศิลป์</option>
    <option value="คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
    <option value="คณะนิเทศศาสตร์">คณะนิเทศศาสตร์</option>
    <option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์</option>
    <option value="คณะการท่องเที่ยวและอุตสาหกรรมบริการ">คณะการท่องเที่ยวและอุตสาหกรรมบริการ</option>
    <option value="วิทยาลัยผู้ประกอบการ">วิทยาลัยผู้ประกอบการ</option>
    <option value="INTERNATIONAL PROGRAM">INTERNATIONAL PROGRAM</option>
  </select><br><br>

<p class="contact"><label for="tel"></label></p>
เบอร์โทรศัพท์ : &nbsp;&nbsp;
<input name="tel" required="" type="text" maxlength="10" onKeyPress="CheckNum()" value="<?php echo $objResult["tel"] ?>"> <br>&nbsp;&nbsp;&nbsp;&nbsp;

<input type ="text"  hidden name="id"  value="<?php echo $id?>">
<?php

?>


<button type="submit" class="button button1" onClick=javaScript:self.location.href="adminupdateedituserlist.php"> ยืนยันการแก้ไข</button>
<button type="button" class="button button3" onClick=javaScript:self.location.href="admindeleteuserlist.php">ลบข้อมูลผู้ใช้</button>


</form>
</center>
<?php
}
}

?>
