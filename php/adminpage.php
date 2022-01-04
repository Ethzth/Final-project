
<?php
  session_start();
if (!$_SESSION["id"]){
 echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('กรุณาล็อคอิน')
        window.location.href='adminlogin.php'
        </SCRIPT>");
}else{

?>
<html>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
	.button {
	    background-color: #4CAF50;
	    color: white;
	    padding: 14px 20px;
	    margin: 8px 0;
	    border: none;
	    cursor: pointer;
	    width: auto;
	}

	.cancelbtn {
	    width: auto;
	    padding: 10px 18px;
	    background-color: #f44336;
	}
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
h1 {
    font-family: Verdana, sans-serif;
	 color: #4682B4;
}


</style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <a class="navbar-brand" href="Test.php">TimeStamp</a>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<body><center>



<h1> Admin </h1>

<?php
if(!isset($_GET['submit_x'])||!isset($_GET['edit_x'])){
?>
<div 	style=" width:300px	; ">
<span style="cursor:pointer">
<form name="test" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="get">
<input type="image" name="submit" value="1" src="pic/DetailOT.png" width="300px">
</div>
</span>
</form>
<?php
if(isset($_GET['submit_x'])){
  echo    "<span style=cursor:pointer>";
  echo 	" <center> <div style='  '><img src=pic/checkOT.png  onClick=javaScript:self.location.href='check01.php' width=300px></img>";
  echo           "   &nbsp;   &nbsp;  &nbsp;  &nbsp;     <img src=pic/sumOT.png   onClick=javaScript:self.location.href='sumot.php'  width=300px ></img></center>";
  echo  "</div> </span>";
}else{
}
?>

<div 	style=" width:300px	;   margin-top:20px; ">
<span style="cursor:pointer">
<form name="test" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="get">
<input type="image" name="edit" value="1" src="pic/editemployees.png" width="300px">
</div>
</span>
</form>

<?php if(isset($_GET['edit_x'])){
  echo    "<span style=cursor:pointer>";
  echo 	" <center> <img src=pic/changeinformation.png  onClick=javaScript:self.location.href='tuu.php' width=300px></img>";
  echo           "   &nbsp;   &nbsp;  &nbsp;  &nbsp;     <img src=pic/editshift.png  onClick=javaScript:self.location.href='editshift.php'  width=300px ></img></center>";
  echo  "</div> </span>";
}else{
}
?>
<div 	style=" width:300px	;  margin-top:20px; ">
<span style="cursor:pointer">
<img src="pic/InsertEmployee.png  "      onClick=javaScript:self.location.href='adminadd.php'  width="300px" ><img>
</span>
</div>
</div>
  </html>


<?php

}
}
?>
