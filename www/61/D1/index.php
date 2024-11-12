<?php
$csvA=fopen("./a.csv","r");
$a=[];
while(($data=fgetcsv($csvA))!==false){
    $a[]=$data;
}
$csvB=fopen("./b.csv","r");
$b=[];
while(($data=fgetcsv($csvB))!==false){
    $b[]=$data;
}
$count=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>問</th>
            <th>解答</th>
            <th>回答</th>
        </tr>
        <?php for($i=0;$i<10;$i++):?>
            <tr>
                <td><?php echo $i+1?></td>
                <td><?php echo $a[$i][1]?></td>
                <td><?php echo $b[$i][1]?></td>
            </tr>
            <?php if($a[$i][1]==$b[$i][1]):?>
                <?php $count++?>
            <?php endif;?>
        <?php endfor;?>
    </table>
    <?php echo "正答数:".$count."/10" ?>
    
</body>
</html>