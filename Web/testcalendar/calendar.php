<?php
date_default_timezone_set('Asia/Bangkok');
?>
<!DOCTYPE html>
<html>
 <head>
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
   <input type="date" style="width:45%" >
   <button type="submit" style="width:10%;" onClick=javaScript:self.location.href="bookmr.php" >Bookroom</button>
   </center>
   <script>
   var dateControl = document.querySelector('input[type="date"]');
   dateControl.value = '<?php echo date('Y-m-d')?>';
   </script>


  <div class="container" style ="width:50%; margin-top:4%; ">
   <div id="calendar"></div>
  </div>
 </body>
</html>
