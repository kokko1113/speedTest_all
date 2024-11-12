<?php
$date1=new DateTime($_GET["before"]);
$date2=new DateTime($_GET["after"]);
$interval=$date1->diff($date2);
echo $interval->days;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="before">
        <input type="text" name="after">
        <button type="submit">送信</button>
    </form>
</body>
</html>