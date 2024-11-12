<?php
// RGB形式のカラーコードをHEX形式に変換する関数
function rgbToHex($r, $g, $b)
{
    // 各色の値を16進数に変換し、2桁になるように0埋めする
    $hexR = str_pad(dechex($r), 2, '0', STR_PAD_LEFT);
    $hexG = str_pad(dechex($g), 2, '0', STR_PAD_LEFT);
    $hexB = str_pad(dechex($b), 2, '0', STR_PAD_LEFT);

    // HEX形式のカラーコードを返す
    return '#' . $hexR . $hexG . $hexB;
}

if (isset($_GET["rcolor"])&&isset($_GET["gcolor"])&&isset($_GET["bcolor"])) {
    // RGB形式のカラーコード
    $rColor = $_GET["rcolor"];
    $gColor = $_GET["gcolor"];
    $bColor = $_GET["bcolor"];

    // RGB形式をHEX形式に変換
    $hexColor = rgbToHex($rColor, $gColor, $bColor);

    // 結果を出力
    echo $hexColor;
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
    <form action="" method="get">
        R:<input type="number" name="rcolor" min="0"max="255">
        G:<input type="number" name="gcolor" min="0"max="255">
        B:<input type="number" name="bcolor" min="0"max="255">
        <button type="submit">変換</button>
    </form>
</body>

</html>