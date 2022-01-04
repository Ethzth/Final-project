

	<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Responsive Calendar Widget that will make your day</title>
    <meta name="distributor" content="Global" />
    <meta itemprop="contentRating" content="General" />
    <meta name="robots" content="All" />
    <meta name="revisit-after" content="7 days" />
    <meta name="description" content="The source of truly unique and awesome jquery plugins." />
    <meta name="keywords" content="slider, carousel, responsive, swipe, one to one movement, touch devices, jquery, plugin, bootstrap compatible, html5, css3" />
    <meta name="author" content="w3widgets.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <!-- Respomsive slider -->
    <link href="../css/responsive-calendar.css" rel="stylesheet">
  </head>
  
<style>.responsive-calendar .controls {
  text-align: center;
}
.responsive-calendar .controls a {
  cursor: pointer;
}
.responsive-calendar .controls h4 {
  display: inline;
}
.responsive-calendar .day-headers,
.responsive-calendar .days {
  font-size: 0;
}
.responsive-calendar .day {
  display: inline-block;
  position: relative;
  font-size: 14px;
  width: 14.285714285714286%;
  text-align: center;
}
.responsive-calendar .day a {
  color: #000000;
  display: block;
  cursor: pointer;
  padding: 20% 0 20% 0;
}
.responsive-calendar .day a:hover {
  background-color: #eee;
  text-decoration: none;
}
.responsive-calendar .day.header {
  border-bottom: 1px gray solid;
}
.responsive-calendar .day.active a {
  background-color: #1d86c8;
  color: #ffffff;
}
.responsive-calendar .day.active a:hover {
  background-color: #36a0e2;
}
.responsive-calendar .day.active .not-current {
  background-color: #8fcaef;
  color: #ffffff;
}
.responsive-calendar .day.active .not-current:hover {
  background-color: #bcdff5;
}
.responsive-calendar .day.not-current a {
  color: #ddd;
}
.responsive-calendar .day .badge {
  position: absolute;
  top: 2px;
  right: 2px;
  z-index: 1;
}
</style>
<?php $todayh = getdate(); 
$m = $todayh['mon'];
$y = $todayh['year'];
 ?>
  <body>
  <br><br>
    <div class="container">
      <!-- Responsive calendar - START -->
    	<div class="responsive-calendar">
        <div class="controls">
            <a class="pull-left" data-go="prev"><div class="btn btn-primary">Prev</div></a>
            <h4><span data-head-year></span> <span data-head-month></span></h4>
            <a class="pull-right" data-go="next"><div class="btn btn-primary">Next</div></a>
        </div><hr/>
        <div class="day-headers">
          <div class="day header">Mon</div>
          <div class="day header">Tue</div>
          <div class="day header">Wed</div>
          <div class="day header">Thu</div>
          <div class="day header">Fri</div>
          <div class="day header">Sat</div>
          <div class="day header">Sun</div>
        </div>
        <div class="days" data-group="days">
          
        </div>
      </div>
      <!-- Responsive calendar - END -->
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/responsive-calendar.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".responsive-calendar").responsiveCalendar({
          time:'2013-04',
          events: {
            "2013-04-30": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},
            "2013-04-26": {"number": 1, "url": "http://w3widgets.com"}, 
            "2013-05-03":{"number": 1}, 
            "2013-06-12": {}}
        });
      });
    </script>
  </body>
</html>
