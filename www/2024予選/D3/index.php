<?php
if(isset($_GET["text"])){
    $text=$_GET["text"];
    print_r(strlen($text));
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
        <input type="text" name="text">
        <button>count</button>
    </form>
</body>
</html>