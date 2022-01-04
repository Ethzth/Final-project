<?php
  session_start();
if (!$_SESSION["id"]){
 echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('กรุณาล็อคอิน')
        window.location.href='adminlogin.php'
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
  <li class="right"><a href="login.php">ออกจากระบบ</a></li>
  <li class="right"><a href="adminpageuserlist.php">รายชื่อผู้ใช้</a></li>
  <li class="right"><a href="adminpageapprove.php">อนุมัติการสมัครสมาชิก</a></li>
  <li class="right"><a href="adminpagecancel.php">ยกเลิกการจองของผู้ใช้</a></li>
  <li class="right"><a href="adminpage.php">หน้าแรก</a></li>

</ul>
</div>
<style>
body {
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
</style>

<script language="JavaScript">
	function ClickCheckAll(vol)
	{

		var i=1;
		for(i=1;i<=document.check.hdnCount.value;i++)
		{
			if(vol.checked == true)
			{
				eval("document.check.chk"+i+".checked=true");
			}
			else
			{
				eval("document.check.chk"+i+".checked=false");
			}
		}
	}

</script>
<script language="javascript">
function check(frm) {
   var inputs = frm.getElementsByTagName('input');
   for(var i = 0 ; i < inputs.length ; i++){
     input = inputs[i];
     if(input.type == 'checkbox'){
          if (input.checked){
               return true;
          };
     };
   };
   alert('กรุณาเลือกอย่างน้อย 1 รายการ');
   return false;
}
</script>
<center>
<h1> Admin </h1>
<table align="center" id="example" class="table table-striped table-bordered"  cellspacing="0" width="100%">

  <tr>
    <th> <div align="center"><input name="CheckAll" type="checkbox" id="CheckAll" value="Y" onClick="ClickCheckAll(this);"></div></th>
    <th> <div align="center">ID</div></th>
    <th> <div align="center">ชื่อ</div></th>
    <th> <div align="center">นามสกุล</div></th>
    <th> <div align="center">เพศ</div></th>
    <th> <div align="center">Email</div></th>
    <th> <div align="center">คณะ</div></th>
    <th> <div align="center">เบอร์โทรศัพท์</div></th>
    <th> <div align="center">วัน/เวลาที่สมัคร</div></th>
  </tr>

<?php
require("connect.php");
$strSQL = "SELECT * FROM account WHERE approve ='0' ";
$objQuery = $conn->query($strSQL);
?>
<body>
<form id="form1" action="adminapproveregister.php"onSubmit=" check(this)" name="form1" method="post" >
  <?php
  $i = 0;
  while($objResult=mysqli_fetch_array($objQuery))
  {
    $i++;
  ?>

      <tr>
      <td align="center"><input type="checkbox" name="chk[]" id="chk<?=$i;?>" value="<?php echo $objResult["id"];?>"><p hidden><?php echo $objResult["id"];?></p> </td>
      <td align="center"><?php echo $objResult["id"];?></td>
      <td align="center"><?php echo $objResult["name"];?></td>
      <td align="center"><?php echo $objResult["lastname"];?></td>
      <td align="center"><?php echo $objResult["sex"];?></td>
      <td align="center"><?php echo $objResult["email"];?></td>
      <td align="center"><?php echo $objResult["faculty"];?></td>
      <td align="center"><?php echo $objResult["tel"];?></td>
      <td align="center"><?php echo $objResult["regisdate"];?></td>
      </tr>

  <?php
  }
}
  ?>
  </table>
  <br>
  <input type="hidden" name="hdnCount" value="<?=$i;?>">
  <button type="submit" class="button button1" >อนุมัติการสมัครสมาชิก</button>
  <button  type="button" class="button button3" type="cancel" >Cancel</button>
  </form>
  </center>
  </body>
  </html>
