<?php
session_start();
if (empty($_SESSION["id"])){
 echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('กรุณาล็อคอิน')
        window.location.href='login.php'
        </SCRIPT>");
}else{
date_default_timezone_set('Asia/Bangkok');
$id = $_SESSION["id"];
require("connect.php");
$strSQL = "SELECT * FROM account where id = '$id' ";
$objQuery = $conn->query($strSQL);
while($objResult=mysqli_fetch_array($objQuery))
{
$name = $objResult["name"];
$lastname  = $objResult["lastname"];
?>
  <div class="nav" >
  <ul class="topnav"style="width:100%;">
  <img src="pic/logo/logo1.png" height="50" width="150">
  <li class="right"><a href="logout.php">ออกจากระบบ</a></li>
  <li><a> <?php echo $name ?> <?php echo $lastname ?> </a></li>
  <li><a href="calendar.php">เลือกวันที่</a></li>
  </ul>
  </div>
<?php
}
?>
<html>
 <head>
	 <style>
   body{
     background-image:url( pic/bg.jpg);
     background-repeat: no-repeat;
     background-position: center center;
     background-attachment: fixed;
     -o-background-size: 100% 100%, auto;
     -moz-background-size: 100% 100%, auto;
     -webkit-background-size: 100% 100%, auto;
     background-size: 100% 100%, auto;
     }
	 		.nav{font-family: "Kanit" ;}
	 		.nav ul.topnav{font-family:"ThaiSans Neue";}
      p {font-family: "Kanit", Times, serif;

      }
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
	 		ul.topnav li a.active {background-color:blue }
	 		ul.topnav li.right {float: right; border-radius:0px;background-color:#;margin-right:35px;}

	 		@media screen and (max-width: 100%){
	 			ul.topnav li.right,
	 			ul.topnav li {float: none;}
	 		}

	 </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script>


  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next ',

     right:'prev,next ',
    },
    events: 'load.php',
    selectable:true,
    selectHelper:true,
    editable:true,

   });
  });
</script>

</head>
<body>
  <br>
  <center>

  <div style ="width:95%;  margin-top:15%;  background-color:#E0FFFF;  border-style: solid;  border-width:1%; border-color:#6495ED; opacity:0.95;">
    กรุณาเลือกวันที่
    <br>&nbsp;
    <form name="test" action="senddate.php" method="post">
    <input id="today2" name="date" type="date"></th>
    <script>
    var dateControl = document.querySelector('input[type="date"]');
    dateControl.value = '<?php echo date('Y-m-d');?>';
    </script>
    <input type="submit" name="submit" value="คลิก"></th></tr>
    </form>
  </div>




<?php
}
?>
   </center>
 </body>
</html>
