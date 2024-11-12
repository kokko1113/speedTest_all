<?php
$pdo_dsn="mysql:host=mariadb;dbname=test;charset=utf8mb4";
$pdo_password="root";
$pdo_user="root";
try{
    $pdo=new PDO($pdo_dsn,$pdo_password,$pdo_user);
    $stmt=$pdo->query("SELECT * FROM users");
}catch(PDOException $e){
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
    <?php foreach($stmt as $data):?>
        <?php echo $data["name"] . ":" .  $data["id"];?><br>
    <?php endforeach;?>
</body>
</html>
