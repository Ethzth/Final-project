<?php
  session_start();
if (empty($_SESSION["id"])){
 echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('กรุณาล็อคอิน')
        window.location.href='login.php'
        </SCRIPT>");
}else{
  require('connect.php');
  $date=$_REQUEST["date"];
  $floor=$_REQUEST["floor"];
  $roomnumber=$_REQUEST["roomnumber"];
  $time =$_REQUEST["time"];
  $id =$_REQUEST["id"];

  $sql=" DELETE FROM booking where idbooker = '$id' and roomnumber = '$roomnumber' and time = '$time' and date = '$date' and floor = '$floor' ";


  if($conn->query($sql) === true){
  	echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert('ยกเลิกการจองแล้ว ')
      window.location.href='adminpagecancel.php'
      </SCRIPT>");
  }else{
  	echo "Fail  :".$conn->error;
  }

  ?>

<?php
}
?>
