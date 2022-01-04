<?php
session_start();
if (empty($_SESSION["id"])){
 echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('กรุณาล็อคอิน')
        window.location.href='login.php'
        </SCRIPT>");
}else{

  $timecheck=$_SESSION["timecheck"];
  $allday = $_SESSION["allday"];
  require('connect.php');
  $id=$_SESSION["id"];
  $strSQL = "SELECT * FROM account where id = '$id' ";
  $objQuery = $conn->query($strSQL);

  while($objResult=mysqli_fetch_array($objQuery))
  {
  $floor=$_SESSION["floor"];
  $roomnumber=$_SESSION["roomnumber"];
  $time= $_SESSION["time"];
  $date=$_SESSION["date"];
  $timecheck=$_SESSION["timecheck"];
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
<script language="javascript">
function CheckNum(){
		if (event.keyCode < 48 || event.keyCode > 57){
		      event.returnValue = false;
	    	}
	}
</script>

<?php

$onlytime = substr($time,0,21);

?>

<body>
<center>
<div class="form" style ="width:900px;  margin-top:20px; background-color:azure;  border-style: solid;  border-width: 20px; border-color: Azure; " >
&nbsp;&nbsp;&nbsp;
<b><h2 style="color:#56A5EC; margin-left:30px; margin-top:15px;">แก้ไขข้อมูลผู้จอง</h2></b>

<form id="fillinfo" action="updateeditinfo.php"
method="post" enctype="multipart/form-data"><br>

<p class="contact"><label for="name"></label></p>
Name : &nbsp;
    <?php echo $objResult["name"];?><br>

<p class="contact"></p>
Lastname : &nbsp;
    <?php echo $objResult["lastname"];?><br>

<p class="contact"></p>
Falcuty : &nbsp;
    <?php echo $objResult["faculty"];?><br>

<p class="contact"></p>
E-mail :  &nbsp;
    <?php echo $objResult["email"];?><br>

<p class="contact"></p>
Floor : &nbsp;
    <?php echo $floor ?><br>

<p class="contact"></p>
Roomnumber : &nbsp;
    <?php echo  $roomnumber?><br>

<p class="contact"></p>
Time : &nbsp;
    <?php echo $onlytime ?><br>

<p class="contact"></p>
Date : &nbsp;
    <?php echo $date?><br>

<p class="contact"></p>
Tel. : &nbsp;
    <?php echo $objResult["tel"]?><br>

    <?php
    if($timecheck == 1){
    $strSQL = "SELECT * FROM booking  where  date = '$date' and time ='08:00:00' and roomnumber= '$roomnumber' ";
    $result = $conn->query($strSQL);
    if ($result->num_rows > 0) {
       $row = mysqli_fetch_array($result);
       $topic = $row["topic"];
     }
       ?>

<p class="contact"><label for="topic"></label></p>
หัวข้อการประชุม : &nbsp;&nbsp;
    <input id="topic" name="topic" required="" type="text" maxlength="100" value="<?php   echo $topic ?>"> <br>&nbsp;&nbsp;&nbsp;&nbsp;



    <?php
  }elseif($timecheck == 2){
    $strSQL = "SELECT * FROM booking  where  date = '$date' and time ='13:00:00' and roomnumber= '$roomnumber' ";
    $result = $conn->query($strSQL);
    if ($result->num_rows > 0) {
       $row = mysqli_fetch_array($result);
       $topic = $row["topic"];
     }
    ?>

<p class="contact"><label for="topic"></label></p>
หัวข้อการประชุม : &nbsp;&nbsp;
    <input id="topic" name="topic" required="" type="text" maxlength="100" value="<?php   echo   $topic ?>"> <br>&nbsp;&nbsp;&nbsp;&nbsp;
<?php
}elseif($timecheck == 3){
  $strSQL = "SELECT * FROM booking  where  date = '$date'  and roomnumber= '$roomnumber' ";
  $result = $conn->query($strSQL);
  if ($result->num_rows > 0) {
     $row = mysqli_fetch_array($result);
     $topic = $row["topic"];
   }
  ?>

<p class="contact"><label for="topic"></label></p>
หัวข้อการประชุม : &nbsp;&nbsp;
  <input id="topic" name="topic" required="" type="text" maxlength="100" value="<?php echo $topic ?>"> <br>&nbsp;&nbsp;&nbsp;&nbsp;

<?php
}
?>
<button type="submit" class="button button1" onClick=javaScript:self.location.href="updateeditinfo.php"> ยืนยันการแก้ไข</button>


<button type="button" class="button button3" onClick=javaScript:self.location.href="cancelbook.php" type="cancel" >ยกเลิกการจอง</button>
</form>
</center>


<?php
}
}

?>
