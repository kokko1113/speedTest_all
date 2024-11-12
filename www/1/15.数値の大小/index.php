<?php
$num=$_GET["num"];
if($num>50){
    print_r("大きすぎます");
}else if($num<50){
    print_r("小さすぎます");
}else{
    print_r("50です");
}
?>
