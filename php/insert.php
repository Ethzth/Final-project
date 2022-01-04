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
    
    background-image:url( pic/scglogistics.jpg);
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


.form input[type="text"] { width: 35%; }

.form input[type="email"] { width: 35%; }

.form input[type="password"] { width: 35%; }

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
<body>

<div  class="form">
<center><br>
<h1>Register</h1>

<br>
            <form id="contactform" action="insertempolyee.php" method="post" >

                <p class="contact"><label for="name"></label></p>

                <input id="name" name="name" placeholder="First name" required="" tabindex="1" type="text"><br>

                <p class="contact"><label for="name"></label></p>

                <input id="name" name="name" placeholder=" Surname" required="" tabindex="1" type="text"><br>

                <p class="contact"><label for="email"></label></p>

                <input id="email" name="email" placeholder="example@domain.com" required="" type="email"><br>

                <p class="contact"><label for="username"</label></p>

                <input id="username" name="username" placeholder="username" required="" tabindex="2" type="text"><br>
          
            <select class="select-style gender" name="gender">

            <option value="select">Sex</option>

            <option value="male">Male</option>

            <option value="female">Female</option>


            </select><br><br>

 
            <p class="contact"><label for="phone"></label></p>

            <input id="phone" name="phone" placeholder="phone number" required="" type="text"> <br><br>
            <input  id="picture" type="file" name="pic" accept="image/*">	
     <br><button type="submit" class="button button1" value="">Login</button>   <button  class="button button3"  onClick=javaScript:self.location.href="adminpage.php" type="cancel" >Cancel</button>  </form> 


</center>
</div>
</body>



</html>

<?php   } ?>