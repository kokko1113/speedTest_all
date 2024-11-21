<?php
$text=$_GET["text"];
$text=preg_replace("/[0-9]/","",$text);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="." method="get">
        <input type="text">
        <button>aaa</button>
    </form>

    <?php echo $text;?>
    
</body>
</html>