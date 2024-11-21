<?php
$day1=$_GET["date1"];
$day2=$_GET["date2"];
$date1=new DateTime($day1);
$date2=new DateTime($day2);
$int=$date1->diff($date2)->days;
print_r($int)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
