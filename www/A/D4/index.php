<?php
$arry1=[1,2,3,4,5];
$arry2=[1,3,5,7,9];
for($i=0;$i<count($arry1);$i++){
    for($j=0;$j<count($arry2);$j++){
        if($arry1[$i]==$arry2[$j]){
            echo $arry1[$i];
        }
    }
}
?>
