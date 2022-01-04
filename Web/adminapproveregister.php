<?php
  session_start();
  require("connect.php");
  if(!empty($_POST["chk"]))
  {

  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('อนุมัติแล้ว ')
        window.location.href='adminpageapprove.php'
        </SCRIPT>");

  for($i=0;$i<count($_POST["chk"]);$i++)
	{
     $strSQL = "UPDATE account SET approve ='1' where id = '".$_POST["chk"][$i]."' ";
     $objQuery =$conn->query($strSQL);
		}
	}else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('กรุณาเลือก1อัน ')
          window.location.href='adminpageapprove.php'
          </SCRIPT>");
  }
  ?>
