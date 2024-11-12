<?php
if (isset($_GET["data1"]) && isset($_GET["data2"])) {
    $data1 = new DateTime($_GET["data1"]);
    $data2 = new DateTime($_GET["data2"]);
    $interval = $data1->diff($data2);
    print_r($interval->format('%a'));
    print_r("日");
}
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
        <input type="" name="data1">
        <input type="" name="data2">
        <button type="submit">送信</button>
    </form>
</body>

</html>