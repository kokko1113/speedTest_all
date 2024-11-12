<?php
if (isset($_GET["text"]) && isset($_GET["name"])) {
    $text = $_GET["text"];
    $name = $_GET["name"];
    $today = date("Y-m-d H:i:s");
    if ($text != "" && $name != "") {
        $arr=json_decode(file_get_contents('./log.json'));
        array_push($arr,["text"=>$text,"name"=>$name,"date"=>$today]);
        file_put_contents('./log.json', json_encode($arr));
    }
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
        <input type="text" name="name" placeholder="名前">
        <input type="text" name="text" placeholder="投稿内容">
        <button type="submit">送信</button>
    </form>
    <table>
        <?php $arr=json_decode(file_get_contents('./log.json'));?>
        
        <?php for ($i = 0; $i < count($arr); $i++) : ?>
            <tr>
                <td><?php echo  $arr[$i]->date; ?></td>
                <td><?php echo "/" . $arr[$i]->name; ?></td>
                <td><?php echo "/" . $arr[$i]->text; ?></td>
            </tr>
        <?php endfor; ?>

    </table>
</body>

</html>