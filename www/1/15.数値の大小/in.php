<?php
$num=$_GET["num"];
if($num>50){
    echo "大きすぎます";
}else if($num<50){
    echo "小さすぎます";
}else{
    echo "50です";
}
?>
