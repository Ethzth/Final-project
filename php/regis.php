
<html>
<body>


      <form id="contactform" action="insertregis.php" method="post" enctype="multipart/form-data">&nbsp;&nbsp;&nbsp;
			
		         Picture :	&nbsp;&nbsp;
<input type="file" name="filUpload">
Name : &nbsp;&nbsp;
                <input id="name" name="name" placeholder="First name" required="" tabindex="1" type="text" maxlength="30"onkeypress="return bannedKey(event)"><br>

                <p class="contact"><label for="name"></label></p> &nbsp;
Surname : &nbsp;&nbsp;
                <input id="surname" name="surname" placeholder=" Surname" required="" tabindex="1" type="text" maxlength="30"onkeypress="return bannedKey(event)"><br>

                <p class="contact"><label for="username"></label></p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Tel :  &nbsp;&nbsp; 
                <input id="tel" name="tel" placeholder="tel" required="" type="text" maxlength="10"onKeyPress="CheckNum()"><br>
					<p class="contact"></p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Salary : &nbsp;&nbsp;
                <input id="salary" name="salary" placeholder="salary" required="" type="text" maxlength="6" onKeyPress="CheckNum()" ><br>
				<p class="contact"></p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ID : &nbsp;&nbsp;
                <input id="id" name="id" placeholder="id" required="" type="text" maxlength="5" onKeyPress="CheckNum()" ><br>
				
          
          


  <div style=" margin-left: 50px; ">
  <p class="contact"></p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" class="button button1" >Add</button> <button type="button"  class="button button3" onClick=javaScript:self.location.href="showregis.php" type="cancel" >Cancel</button> 

</center>
</div>
</body>
</html>