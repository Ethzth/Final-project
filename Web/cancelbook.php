<?php
session_start();
if (empty($_SESSION["id"])){
 echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('กรุณาล็อคอิน')
        window.location.href='login.php'
        </SCRIPT>");
}else{
  require('connect.php');

  $id=$_SESSION["id"];
  $roomnumber=$_SESSION["roomnumber"];
  $onlytime =$_SESSION["onlytime"];
  $date=$_SESSION["date"];
  $allday=$_SESSION["allday"];
  if($allday == 0){
    $sql=" DELETE FROM booking where idbooker = '$id' and roomnumber = '$roomnumber' and time = '$onlytime' and date = '$date' ";
  }else{
    $sql=" DELETE FROM booking where idbooker = '$id' and roomnumber = '$roomnumber'  and date = '$date' ";
  }


  if($conn->query($sql) === true){
  	echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert('ยกเลิกการจองแล้ว ')
      window.location.href='selectflmr.php'
      </SCRIPT>");
  }else{
  	echo "Fail  :".$conn->error;
  }

  ?>


<?php
}
?>
