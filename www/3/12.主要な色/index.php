<?php

$imagePath = './img.jpg';
$image = imagecreatefromjpeg($imagePath);

$width = imagesx($image);
$height = imagesy($image);

$colors = [];
for ($x = 0; $x < $width; $x++) {
    for ($y = 0; $y < $height; $y++) {
        // ピクセルの色を取得
        $rgb = imagecolorat($image, $x, $y);
        $color = imagecolorsforindex($image, $rgb);

        // RGB値を取得
        $red = $color['red'];
        $green = $color['green'];
        $blue = $color['blue'];

        // 合計をキーとして、色を保存
        $arrKey=$red . "," .  $green . "," . $blue;
        if(!isset($colors[$arrKey])){
            $colors[$arrKey]=1;
        }else{
            $colors[$arrKey]++;
        }
    }
}
arsort($colors);
$new=array_slice($colors,0,3);
$one=key(array_slice($new,0,1));
$two=key(array_slice($new,1,1));
$three=key(array_slice($new,2,1));
list($r1,$g1,$b1)=explode(",",$one);
list($r2,$g2,$b2)=explode(",",$two);
list($r3,$g3,$b3)=explode(",",$three);
echo "1番目:rgb(" . $r1 . "," . $g1 . "," . $b1 . ")";
echo "2番目:rgb(" . $r2 . "," . $g2 . "," . $b2 . ")";
echo "3番目:rgb(" . $r3 . "," . $g3 . "," . $b3 . ")";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D5</title>
</head>
<body>
    
</body>
</html>
