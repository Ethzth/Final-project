<?php
if(isset($_POST['submit1'])) 
{ 

echo "<br> <br> <br> <br> <br> <br><br> <br> <br> <br> ";
  echo    "<span style=cursor:pointer>";
  echo 	" <center> <img src=pic/check.png         onClick=javaScript:self.location.href='checkot.php' width=380px ></img>";
  echo           " <img src=pic/sum.png        onClick=javaScript:self.location.href='sumot.php'  width=380px ></img></center>";
  echo  "</span>";
  echo  "</div>";
  echo  "</body>";
}else{
?>
<form name="test" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
<input type="submit" name="submit1" value="ส่งข้อมูล"></td></tr>

</form>
<?php
}
?>