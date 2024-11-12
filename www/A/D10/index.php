<?php
if(isset($_GET["name"])&&isset($_GET["text"])){
    $name=$_GET["name"];
    $text=$_GET["text"];
    $date=date("Y-m-d");
    if($name!=""&&$text!=""){
        $arr=json_decode(file_get_contents("./log.json"));
        if(!is_array($arr)){
            $arr=[];
        }
        array_push($arr,["name"=>$name,"text"=>$text,"date"=>$date]);
        file_put_contents("./log.json",$arr);
    }
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
        <input type="text" name="name" placeholder="name">
        <input type="text" name="text" placeholder="text">
        <button type="submit">投稿</button>
    </form>
    <?php $arr=json_decode(file_get_contents("./log.json"))?>
    <?php for($i=0;$i<count($arr);$i++):?>
        <?php echo $arr["date"] . $arr["name"] . $arr["text"];?>
    <?php endfor;?>
</body>
</html>