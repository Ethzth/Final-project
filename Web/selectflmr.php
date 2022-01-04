<?php
session_start();
if (empty($_SESSION["id"])){
 echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('กรุณาล็อคอิน')
        window.location.href='login.php'
        </SCRIPT>");
}else{
date_default_timezone_set('Asia/Bangkok');

$date=$_SESSION["date"];
$id = $_SESSION["id"];

require("connect.php");

$strSQL = "SELECT * FROM account where id = '$id' ";
$objQuery = $conn->query($strSQL);
while($objResult=mysqli_fetch_array($objQuery))
{
$name = $objResult["name"];
$lastname  = $objResult["lastname"];
?>
<html>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css">
<script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js">	</script>
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">	</script> -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js">	</script>
<body>

  <div class="nav" >
	<ul class="topnav"style="width:100%;">
    <img src="pic/logo/logo1.png" height="50" width="150">
		<li class="right"><a href="logout.php">ออกจากระบบ</a></li>
    <li><a> <?php echo $name ?> <?php echo $lastname ?> </a></li>
		<li><a href="calendar.php">เลือกวันที่</a></li>

<?php
}
?>
	</ul>
</div>
<style>
body {
  background-image:url( pic/bg.jpg);
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
		ul.topnav li a.active {background-color:white }
		ul.topnav li.right {float: right; border-radius:0px;background-color:#;margin-right:35px;}

		@media screen and (max-width: 100%){
			ul.topnav li.right,
			ul.topnav li {float: none;}
		}

</style>

	<script>
	   $(document).ready(function() {
     $('#example').DataTable();
      } );
	</script>
	<?php
	date_default_timezone_set('Asia/Bangkok');
  require("connect.php");

  ?>
<center>
  <div style ="width:95%;  margin-top:20px;  background-color:azure;  border-style:solid;  border-width:10px;  border-color:Azure;">
	<b><h1 style="color:#56A5EC">รายละเอียดห้องประชุม</h1></b>
	<table align="center" id="example" class="table table-striped table-bordered"  cellspacing="0" width="100%">
    <thead>
      <tr style="background-color: #dddddd;">
        <th colspan="20"><center><h> วันที่ : <?php echo $date?> </h2></center></th>
        </tr>
        <tr>
          <th style= "width:5%"> <div align="center">ชั้น</div></th>
          <th style= "width:5%"> <div align="center">เลขที่ห้อง </div></th>
	        <th style= "width:20%"> <div align="center">คณะ </div></th>
          <th style= "width:15%"> <div align="center">อุปกรณ์ </div></th>
	        <th style= "width:5%"> <div align="center">จำนวนที่นั่ง</div></th>
          <th style= "width:15%"> <div align="center">08:00น. - 12:00น.</div></th>
          <th style= "width:15%"> <div align="center">13:00น. - 17:00น.</div></th>
          <th style= "width:15%"> <div align="center">08:00น. - 17:00น.</div></th>
        </tr>
      </thead>
      <tbody>
        <?php
        $strSQL = "SELECT * FROM detailmr ";
        $objQuery1 = $conn->query($strSQL);
        while($objResult =mysqli_fetch_array($objQuery1))
        {
          $_SESSION["roomnumber"]=$objResult["roomnumber"];
          $floor= $objResult["floor"];
          $roomnumber=$_SESSION["roomnumber"];
          ?>
          <tr>
            <td><div align="center"><?php echo $objResult["floor"];?></div></td>
            <td align="center"><?php echo $objResult["roomnumber"];?></td>
            <td align="center"><?php echo $objResult["faculty"];?></td>
            <td align="center"><?php echo $objResult["equipment"];?></td>
            <td align="center"><?php echo $objResult["seat"];?></td>
            <td align="center">
              <?php
              $strSQL = "SELECT * FROM booking  where  date = '$date' and time ='08:00:00' and roomnumber= '$roomnumber' ";
              $result = $conn->query($strSQL);
              if($result->num_rows > 0) {
                $row = mysqli_fetch_array($result);
                $idbooker= $row["idbooker"];
                $_SESSION["idbooker"] = $idbooker;
                $strSQL = "SELECT * FROM account where id = '$idbooker' ";
                $objQuery = $conn->query($strSQL);
                while($objResult=mysqli_fetch_array($objQuery))
                {
                  $bookername = $objResult["name"];
                  ?>
                  <form action ="fillin.php" method= "POST">
                    <input type ="text"  hidden name="time"  value="08:00น. - 12:00น. <?php echo $roomnumber?> <?php echo $idbooker?>">
                    <input type ="text"  hidden name="floor"  value="<?php echo $floor?>">
                    <input type ="text"  hidden name="timecheck"  value="1">
                    <input type ="text"  hidden name="allday"  value="0">
                    <button  type="submit"class="button button3" > <?php  echo $bookername ?></button>
                  </form>
                </td>
                <?php
              }
            }else{
              ?>
              <form action ="fillin.php" method= "POST">
                <input type ="text"  hidden name="time"  value="08:00น. - 12:00น. <?php echo $roomnumber?>">
                <input type ="text"  hidden name="timecheck"  value="1">
                <input type ="text"  hidden name="allday"  value="0">
                <input type ="text"  hidden name="floor"  value="<?php echo $floor?>">
                <button  type="cancel"class="button button1" > ว่าง</button>
                <?php
              }
              ?>
            </form>
            <?php
            $strSQL = "SELECT * FROM booking  where  date = '$date' and time ='13:00:00' and roomnumber= '$roomnumber' ";
            $result = $conn->query($strSQL);
            if ($result->num_rows > 0) {
              $row = mysqli_fetch_array($result);
              $idbooker= $row["idbooker"];
              $strSQL = "SELECT * FROM account where id = '$idbooker' ";
              $objQuery = $conn->query($strSQL);
              while($objResult=mysqli_fetch_array($objQuery))
              {
                $bookername = $objResult["name"];
                ?>
                <td align="center">
                  <form action ="fillin.php" method= "POST">
                    <input type ="text"  hidden name="time"  value="13:00น. - 17:00น. <?php echo $roomnumber?>  <?php echo $idbooker?> ">
                    <input type ="text"  hidden name="floor"  value="<?php echo $floor?>">
                    <input type ="text"  hidden name="timecheck"  value="2">
                    <input type ="text"  hidden name="allday"  value="0">
                    <button  type="submit"class="button button3" > <?php  echo $bookername ?></button>
                  </form>
                </td>
                <?php
              }
            }else{
              ?>
              <td align="center">
                <form action ="fillin.php" method= "POST">
                   <input type ="text"  hidden name="time"  value="13:00น. - 17:00น. <?php echo $roomnumber?> ">
                   <input type ="text"  hidden name="floor" value="<?php echo $floor?>">
                   <input type ="text"  hidden name="timecheck" value="2">
                   <input type ="text"  hidden name="allday"  value="0">
                   <button  type="cancel"class="button button1" > ว่าง</button>
                 </form>
               </td>
               <?php
             }
             ?>
             <?php
             $strSQL = "SELECT * FROM booking  where  date = '$date'  and roomnumber= '$roomnumber' ";
             $result = $conn->query($strSQL);
             if ($result->num_rows > 0) {
               $row = mysqli_fetch_array($result);
               $idbooker= $row["idbooker"];
               $_SESSION["idbooker"] = $idbooker;
               ?>
              <td align="center">
                <form action ="fillin.php" method= "POST">
                      <input type ="text"  hidden name="time"  value="08:00น. - 17:00น. <?php echo $roomnumber?>  <?php echo $idbooker?>">
                      <input type ="text"  hidden name="floor"  value="<?php echo $floor?>">
                      <input type ="text"  hidden name="timecheck" value="3">
                      <input type ="text"  hidden name="allday"  value="1">
                    <button  type="submit"class="button button3" > ไม่ว่าง </button>
                  </form>
                </td>
          <?php
        }else{
            ?>
            <td align="center">
              <form action ="fillin.php" method= "POST">
              <input type ="text"  hidden name="time"  value="08:00น. - 17:00น. <?php echo $roomnumber?> ">
              <input type ="text"  hidden name="floor"  value="<?php echo $floor?>">
              <input type ="text"  hidden name="timecheck" value="3">
              <input type ="text"  hidden name="allday"  value="1">
              <button  type="cancel"class="button button1" > ว่าง</button>
            </form>
          </td>

          <?php
        }
      }
      ?>
    </form>
  </td>
</tr>
<?php
}
?>
</center>
</tbody>
</table>
</div>
</body>
</html>
