<?php
  session_start();
if (empty($_SESSION["id"])){
 echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('กรุณาล็อคอิน')
        window.location.href='login.php'
        </SCRIPT>");
}else{

  $floor= $_REQUEST["floor"];
  $_SESSION["floor"]=$floor;
  $timecheck = $_REQUEST["timecheck"];
  $_SESSION["timecheck"] = $timecheck;
  require('connect.php');
  $id=$_SESSION["id"];

  $strSQL = "SELECT * FROM account where id = '$id' ";
  $objQuery = $conn->query($strSQL);
  while($objResult=mysqli_fetch_array($objQuery))
  {
  $_SESSION["name"]=$objResult["name"];
  $_SESSION["lastname"]=$objResult["lastname"];
  $_SESSION["faculty"]=$objResult["faculty"];
  $date=$_SESSION["date"];
  $time= $_REQUEST["time"];
  $roomnumber= substr($time,22,6);
  $_SESSION["time"] = $time;
  $lengthtime =strlen($time);
  $onlytime = substr($time,0,20);
  $_SESSION["roomnumber"] = $roomnumber;
  $_SESSION["onlytime"] = $onlytime;
  $_SESSION["email"] = $objResult["email"];
  $allday= $_REQUEST["allday"];
  $_SESSION["allday"] = $allday;
  ?>
<html>
<head>
</head>
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
.form select    { width: 10%;  height: 5%; border-color: #56A5EC; }
.form input[type="email"] { width: 35%;border-color: #56A5EC; }
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
	  width: 15%;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button3 {
    background-color: white;
    color: black;
	width: 15%;
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
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
<?php if($lengthtime>29){

header("location:showbookerinfo.php");

}else{
  ?>

<center><div class="form" style ="width:900px;  margin-top:20px; background-color:azure;  border-style: solid;   border-width: 20px; border-color: Azure; " >
&nbsp;&nbsp;&nbsp;

 <b><h2 style="color:#56A5EC; margin-left:30px; margin-top:15px;">รายละเอียดการจอง</h2></b>

<p class="contact"></p>
ชั้น : &nbsp;
     <?php echo $floor ?><br>

<p class="contact"></p>
ห้องเลขที่ : &nbsp;
     <?php echo  $roomnumber?><br>

<p class="contact"></p>
วันที่ : &nbsp;
     <?php echo $date?><br>

<p class="contact"></p>
เวลา : &nbsp;
     <?php echo $onlytime ?><br><br>

<b><h2 style="color:#56A5EC; margin-left:30px; margin-top:15px;">กรอกหัวข้อการประชุม</h2></b>

<form id="fillinfo" action="insert.php"
method="post" enctype="multipart/form-data">

<p class="contact"><label for="name"></label></p>
ชื่อ : &nbsp;
    <?php echo $objResult["name"];?><br>

<p class="contact"><label for="lastname"></label></p>
นามสกุล : &nbsp;
    <?php echo $objResult["lastname"];?><br>

<p class="contact"><label for="faculty"></label></p>
คณะ : &nbsp;
    <?php echo $objResult["faculty"];?><br>

<p class="contact"><label for="email"></label></p>
E-mail :  &nbsp;
    <?php echo $objResult["email"];?><br>

<p class="contact"><label for="tel"></label></p>
Tel :  &nbsp;
    <?php echo $objResult["tel"];?><br><br>


<p class="contact"><label for="topic"></label></p>
หัวข้อการประชุม : &nbsp;&nbsp;
  <input id="topic" name="topic" required="" type="text" maxlength="100"><br>&nbsp;&nbsp;&nbsp;&nbsp;

<div style=" margin-left: 50px; ">
  <button type="submit" class="button button1" >ยืนยัน</button>
  <button type="button" class="button button3" onClick=javaScript:self.location.href="selectflmr.php" type="cancel" >ยกเลิก</button>



</center>
</div>
</body>

</html>
<?php
}


}
  } ?>
