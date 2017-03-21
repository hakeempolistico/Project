<!DOCTYPE html>
<html>
<body>

<?php
$date=date_create("2013-03-15 23:40:00",timezone_open("Europe/Oslo"));
$date2=date_create("2013-04-15 23:40:00",timezone_open("Europe/Oslo"));
$date1 = date_diff($date, $date2);
echo $date1;
?>

</body>
</html>