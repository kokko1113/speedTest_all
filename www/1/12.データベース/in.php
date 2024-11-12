<?php
$pdo_dsn="mysql:host=mariadb;dbname=test;charset=utf8mb4";
$pdo_password="root";
$pdo_user="root";
$price=$_GET["price"];
$limit=$_GET["limit"];
$category=$_GET["category"];
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
    $pdo=new PDO($pdo_dsn,$pdo_password,$pdo_user);
    if($str!=""){
        $stmt=$pdo->query("SELECT * FROM new");
    }else{
        $stmt=$pdo->query("SELECT * FROM new where" . $str);
    }
}catch(Exception $e){
    echo "Erorr:";
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
    <form action="" method="get">
        <select name="category" id="">
            <option value="fruit">fruit</option>
            <option value="stationary">stationary</option>
            <option value="human">human</option>
        </select>
        <input type="text" name="price">
        <select name="limit" id="">
            <option value="above">以上</option>
            <option value="below">以下</option>
        </select>
        <button type="submit">aa</button>
    </form>
    <table>
        <tr></tr>
    </table>
</body>
</html>
