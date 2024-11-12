<?php
$pdo_dsn="mysql:host=mariadb;dbname=test;charset=utf8mb4";
$pdo_password="root";
$pdo_user="root";

$category=$_GET["category"];
$price=$_GET["price"];
$limit=$_GET["limit"];
$arr=[];
if($price!=""){
    if($limit=="above"){
        array_push($arr,"price>=" . $price);
    }else if($limit=="below"){
        array_push($arr,"price<=" . $price);
    }
}
if($category!=""){
    array_push($arr,"category='" . $category . "'");
}
$str=implode(" AND ",$arr);
try{
    $pdo=new PDO($pdo_dsn,$pdo_user,$pdo_password);
    if($str==""){
        $stmt=$pdo->query("SELECT * FROM new");
    }else{
        $stmt=$pdo->query("SELECT * FROM new WHERE " . $str);
    }
}catch (PDOException $e){
    echo "Error:";
    echo $e->getMessage();
    exit();
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
    <form action=""method="get">
        <select name="category" id="">
            <option value="fruit">fruit</option>
            <option value="stationary">stationary</option>
            <option value="human">human</option>
        </select>
        <input type="number" name="price" id="" placeholder="値段">
        <select name="limit" id="">
            <option value="above">以上</option>
            <option value="below">以下</option>
        </select>
        <button type="submit">送信</button>
    </form>
    <?php foreach($stmt as $data):?>
        <?php echo $data["id"];?>
        <?php echo $data["name"];?>
        <?php echo $data["category"];?>
        <?php echo $data["price"];?>
        
    <?php endforeach;?>
    
</body>
</html>