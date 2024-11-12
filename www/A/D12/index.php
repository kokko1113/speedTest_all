<?php
echo "2022年";
for($i=1;$i<=12;$i++){
    $end=date("t",strtotime("2022-$i-01"));
    echo "/" .  $i . "月" . $end . "日";
}





for($i=1;$i<=12;$i++){
    $end=date("t",strtotime("2022-$i-01"));
    echo $end;
}
?>
