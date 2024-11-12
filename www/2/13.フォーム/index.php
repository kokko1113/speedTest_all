<?php
if(isset($_GET["name"])&&isset($_GET["age"])){
    $name=$_GET["name"];
    $age=$_GET["age"];
    $addArr = array(
        "name" => $_POST["blogtitle"] ,
        "age" => $_POST["blogurl"] ,
    );
    $arrJson[] = $addArr ; 
    $arrJson = json_encode($arrJson);
    file_put_contents('./data.json', $arrJson);
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
    <form action="./complete.php" method="post">
        <label for="name">名前：</label>
        <input name="name" id="name" type="text" require>
        
        <label for="age">年齢：</label>
        <input name="age" id="age" type="number" require>

        <button type="submit">送信</button>
    </form>
</body>
</html>