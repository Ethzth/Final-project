<?php
  session_start();
if (!$_SESSION["id"]){
 echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('กรุณาล็อคอิน')
        window.location.href='adminlogin.php'
        </SCRIPT>");
}else{?>
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
<script>
function bannedKey(evt)
{
var allowedEng = true; //อนุญาตให้คีย์อังกฤษ
var allowedThai = true; //อนุญาตให้คีย์ไทย
var allowedNum = false; //อนุญาตให้คีย์ตัวเลข
var k = event.keyCode;/* เช็คตัวเลข 0-9 */
if (k>=48 && k<=57) { return allowedNum; }

/* เช็คคีย์อังกฤษ a-z, A-Z */
if ((k>=65 && k<=90) || (k>=97 && k<=122)) { return allowedEng; }

/* เช็คคีย์ไทย ทั้งแบบ non-unicode และ unicode */
if ((k>=161 && k<=255) || (k>=3585 && k<=3675)) { return allowedThai; }
}
</script>
<body>
<?php
?>
<center><div class="form" style ="width:900px; height:90%; margin-top:20px; background-color:azure;  border-style: solid;   border-width: 20px; border-color: Azure; " >

 <b><h2 style="color:#56A5EC; margin-left:30px;  margin-top:80px;">Edit Employee</h2></b>

<br>
          <form id="contactform" action="updateemployee.php" method="POST" >
			  <div align= "center"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Eid : &nbsp;&nbsp;
                <input id="eid" name="eid" placeholder="Eid" required="" readonly value="123456" type="text" maxlength="10" ><br>


&nbsp; First name : &nbsp;&nbsp;
                <input id="name" name="name" placeholder="First name" required="" value="ชื่อ" tabindex="1" type="text" maxlength="30" onkeypress="return bannedKey(event)"><br>

        &nbsp;&nbsp;&nbsp;&nbsp;
Surname : &nbsp;&nbsp;
                <input id="surname" name="surname" placeholder="Surname" required="" value="นามสกุล" tabindex="1" type="text" maxlength="30" onkeypress="return bannedKey(event)"><br>

       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Job : &nbsp;&nbsp;
                <input id="job" name="job" placeholder="Job" required="" value="งาน" tabindex="2" type="text" maxlength="20" onkeypress="return bannedKey(event)"><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


Salary :  &nbsp;&nbsp;
                <input id="salary" name="salary" placeholder="salary" required="" value="เงินเดือน" tabindex="2" type="text" maxlength="6" onKeyPress="CheckNum()"><br>
Sex : &nbsp;&nbsp;
      <select id="sex" name="sex" >
	<?php   if( $_SESSION["sex"] == male){	?>
    <option value="<?php echo $_SESSION["sex"];?>">ชาย</option>
   <option value="female">หญิง</option>
<?php
  }else{ ?>
   <option value="<?php echo $_SESSION["sex"];?>">หญิง</option>
   <option value="male">ชาย</option>
<?php    } ?>
</select>
  &nbsp;&nbsp;
  <br></br>

  Telephone :  &nbsp;&nbsp;
             <input id="tel" name="tel" placeholder="Telephone" required=""  value="<?php echo $_SESSION["tel"];?>"type="text" maxlength="10" onKeyPress="CheckNum()">

</div>
			 <div style=" margin-left: 50px; ">
<br><button type="submit" class="button button1" >Edit</button> <button type="button"  class="button button3" onClick=javaScript:self.location.href="adminpage.php" type="cancel" >Cancel</button>

</div>
</center>
</div>
</body>



</html>


<?php
 } ?>
