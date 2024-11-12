<?php
$pdo_dsn="mysql:host=localhost;dbname=;charset=utf8mb4";
$pdo_password="web";
$pdo_user="compe2022";
try{
    $pdo=new PDO($pdo_dsn,$pdo_password,$pdo_user);
    $stmt=$pdo->query("SELECT FROM");
}catch(PDOException $e){
    echo "Erorr:";
    echo $e->getMessage();
    exit();
}
?>
