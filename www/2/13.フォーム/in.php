<?php
$name=$_GET["name"];
$age=$_GET["age"];
if($name!=""&&$age!=""){
    $arry=json_decode(file_get_contents('./data.json'));
    array_push($arry,["name"=>$name,"age"=>$age]);
    file_put_contents('./data.json',json_encode($arry));
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
    <form action="./com.php" method="get">
        名前：<input type="text" name="name" id="">
        年齢：<input type="number" name="age" id="">
        <button type="submit">送信</button>
    </form>
</body>
</html>