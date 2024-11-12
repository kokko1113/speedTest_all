<?php
$name=$_GET["name"];
$text=$_GET["text"];
$today=date("Y-m-d H-i-s");
if($name!=""&&$text!=""){
    $arry=json_decode(file_get_contents('./log.json'));
    array_push($arry,["name"=>$name,"text"=>$text]);
    file_put_contents('./log.json',json_encode($arry));
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
        <input type="text" name="name">
        <input type="text" name="text">
        <button >sss</button>
    </form>
</body>
</html>
