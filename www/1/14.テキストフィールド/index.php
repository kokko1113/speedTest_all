<?php
if(isset($_GET["text"])){
    $text=$_GET["text"];
    $text=preg_replace("/[0-9]/","",$text);
    echo $text;
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
        <input name="text" type="text">
        <button type="submit">送信</button>
    </form>
</body>
</html>