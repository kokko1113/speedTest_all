<?php
$page=$_GET["page"];
$arr=json_decode(file_get_contents("./data.json"));
if(!isset($_GET["page"])){
    $page=1;
}
if($page<3){
    $center=3;
}else if($page>8){
    $center=8;
}else{
    $center=$page;
}
$before=$page>5?$page-5:1;
$after=$page<6?$page+5:10;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php for($i=$page*10-10;$i<$page*10;$i++):?>
        <?php echo $arr[$i]->name . "(" . $arr[$i]->age . ")" ;?>
        <br>
    <?php endfor;?>

    <?php if($page!=1):?>
        <a href="index.php?page=<?php echo ($before); ?>"><?php echo "←"; ?></a>
    <?php endif;?>
    
    <a href="index.php?page=<?php echo ($center - 2); ?>"><?php echo ($center-2); ?></a>
    <a href="index.php?page=<?php echo ($center - 1); ?>"><?php echo ($center-1); ?></a>
    <a href="index.php?page=<?php echo ($center); ?>"><?php echo ($center); ?></a>
    <a href="index.php?page=<?php echo ($center + 1); ?>"><?php echo ($center+1); ?></a>
    <a href="index.php?page=<?php echo ($center + 2); ?>"><?php echo ($center+2); ?></a>

    <?php if($page!=10):?>
        <a href="index.php?page=<?php echo ($after); ?>"><?php echo "→"; ?></a>
    <?php endif;?>
</body>
</html>