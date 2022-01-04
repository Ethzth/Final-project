<?php date_default_timezone_set('Asia/Bangkok');
?>
<form name="test" action="selectedit.php" method="post">
 <table class="imagetable" width="300"  align="center">
    <tr>

<th align="center"><input id="today2" name="date" type="date"></th>
<script>
var dateControl = document.querySelector('input[type="date"]');
dateControl.value = '<?php echo date("h:i:sa");?>';
</script>
<th align="center"><input type="submit" name="submit" value="search"></th></tr>
</form>