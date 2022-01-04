<?php
session_start();
$bookmr=$_REQUEST["bookmr"];
$_SESSION["bookmr"]=$bookmr;
?>
<html>
<head>

  <div class="nav" >
  <ul class="topnav"style="width:100%;">
  <img src="pic/logo/logo1.png" height="50" width="150">
  <li class="right"><a href="login.php">ออกจากระบบ</a></li>
  <li><a href="calendar.php">ปฏิทิน</a></li>

  </ul>
  </div>

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
</head>
<meta charset="utf-8">
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

.form fieldset{border:0px; padding:0px; margin:0px;}

.form p.contact { font-size: 12px; margin:0px 0px 10px 0;line-height: 14px; font-family:Arial, Helvetica;}


.form input[type="text"] { width: 35%;     border-color: #56A5EC; }
.form input[type="eid"] { width: 35%;border-color: #56A5EC; }

.form input[type="email"] { width: 35%;border-color: #56A5EC; }

.form input[type="password"] { width: 35%; border-color:#56A5EC;}

.form input[type="file"] { width: 35%;border-color: #56A5EC; }
.form label { color: #000; font-weight:bold;font-size: 12px;font-family:Arial, Helvetica; }
.form select    { width: 10%;  height: 5%;   border-color: #56A5EC; }

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

#container { font:14px Tahoma, "Hello";}
#col1{float:left;
  color: #FFFFFF;
  width:40%;
  height: 50%;
  margin-left:10%;
}
#col2{float:right;
  color: #000000;
  width: 50%;
  height: auto;

}


</style>
<script language="javascript">
function CheckNum(){
  if (event.keyCode < 48 || event.keyCode > 57){
        event.returnValue = false;
      }
}
</script>
<script>
function bannedKey(evt)
{
var allowedEng = true;
var allowedThai = true;
var allowedNum = false;
var k = event.keyCode;
if (k>=48 && k<=57) { return allowedNum; }


if ((k>=65 && k<=90) || (k>=97 && k<=122)) { return allowedEng; }

if ((k>=161 && k<=255) || (k>=3585 && k<=3675)) { return allowedThai; }
}
</script>
<body>

<?php

date_default_timezone_set('Asia/Bangkok');

require('connect.php');

$sql="select * from detailmr where roomnumber ='$bookmr'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$_SESSION["floor"] = $row["floor"];
$_SESSION["roomnumber"] = $row["roomnumber"];
$_SESSION["faculty"] = $row["faculty"];
$_SESSION["equipment"] = $row["equipment"];
$_SESSION["seat"] = $row["seat"];
}
}
?>

<center>
<b><h2 style="color:#56A5EC;   margin-top:50px;">รายละเอียดห้องประชุม</h2></b> <br>
</center>
<div id="container">
      <div id ="col1">
        <img width="100%"src="pic/mr/mr1.jpg"  >
      </div>
      <div id ="col2"  >
        <div style=" margin-left:12%; margin-top:5%;">
        Floor :
        <?php echo $_SESSION["floor"]; ?> <br><br>

        Roomnumber :
        <?php echo $_SESSION["roomnumber"];?> <br><br>

        Falcuty :
        <?php echo $_SESSION["faculty"];?> <br><br>

        Equipment :
        <?php echo $_SESSION["equipment"];?> <br><br>

        Seat :
        <?php echo $_SESSION["seat"];?> <br><br>

      </div>
      </div>
  </div>
  <center>
     <div>
       <button type="submit" class="button button1" style="margin-top:5%" onClick=javaScript:self.location.href="timetd.php">เลือกเวลา</button>
       <button type="button" class="button button3" style="margin-top:5%" onClick=javaScript:self.location.href="selectflmr.php" type="cancel" >ยกเลิก</button>
    </div>
  </center>
</body>



</html>


<?php
?>
