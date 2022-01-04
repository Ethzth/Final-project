<html>
<head>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

body {  

background-image:url(pic/scglogis.png);
background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
-o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
}
input[type=text] {

    width: 40%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

.na {

  position: fixed;
  top: 42%;
  width: 100%;

}

function setFocus(){
frm.eid.focus();
}
</style>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Test.php">TimeStamp</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="adminlogin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<center>
<div class="na">	
<body   onLoad="document.frm.eid.focus();">
<form action="check.php" method="post" name="frm">
 <h3><b> EID  : <b>
<input type="text" name="eid" id="eid" placeholder="กรุณาทาบบัตร" maxlength="10"> </input>

</form>
</div>
</body>








</html>