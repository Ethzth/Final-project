<?php session_start();
date_default_timezone_set('Asia/Bangkok');?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
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


.form input[type="text"] { width: 30%; }

.form input[type="email"] { width: 35%; }

.form input[type="password"] { width: 30%; }

.form input[type="file"] { width: 35%; }
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
	width: 10%;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button3 {
    background-color: white; 
    color: black; 
	width: 10%;
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}

</style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Test.php">TimeStamp</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
   
      </ul>
    </div>
  </div>
</nav>
<center>

<script type="text/javascript">
    $('button[type!=submit]').click(function(){
        // code to cancel changes
        return false;
    });
</script>
<div  class="form">
<form action="checkadmin.php" >
  <div class="imgcontainer">
  <br>
    <center><img src="pic/admins.png" width="13%" height="26%"></center><br><br>
  </div>
  <center>
    <br><label><b>Username   :</b></label>
    <input id="id"type="text" placeholder="Enter Username" name="id" required></br>

    <br><label><b>Password   :</b></label>
    <input id="pass"type="password" placeholder="Enter Password" name="pass" required></br>

    <br><br><br><button type="submit" class="button button1" value="">Login</button> 
	<button  class="button button3" onClick=javaScript:self.location.href="Test.php" type="cancel" >Cancel</button>
  </form>
   </div>
</center>
  
</html>