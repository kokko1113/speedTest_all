<?php
echo "2022年:";
for($i=1;$i<=12;$i++){
    $monthend=date("t",strtotime("2022-$i-01"));
    echo $i . "月" . $monthend . "日/";
}
?>
