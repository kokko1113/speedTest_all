<!-- <?php
$dsn="mysql:host=mariadb;dbname=root;charset=utf8mb4";
$pass="root";
$user="root";
try{
    $pdo=new PDO($dsn,$pass,$user);
    $stmt=$pdo->query("SELECT * FROM uses");
}catch(PDOException $e){
    echo "error";
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
        <?php echo $data["name"]?>
        <?php echo $data["name"]?>
        <?php echo $data["name"]?>
        
        <?php endforeach;?>
</body>
</html> -->

<?php
$dsn="mysql:host=mariadb;dbname=user;charset=utf8mb4";
$pass="root";
$user="root";
try{
    $pdo=new PDO($dsn,$pass,$user);
    $stmt=$pdo->query("SELECT * FROM users");
}catch(PDOException $e){
    echo "error:";
    echo $e->getMessage();
    exit();
}
?>
