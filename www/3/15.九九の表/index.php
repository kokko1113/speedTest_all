<?php
if(isset($_GET["num"])){
$num = $_GET["num"];
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
        <select name="num" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select>
        <button type="submit">送信</button>
    </form>
    <table border="1">
        <?php for ($i = 1; $i < 10; $i++) : ?>
            <tr>
                <td><?php echo $i . "×" . $num . "="; ?>
                </td>
                <td><?php echo $i * $num; ?></td>
            </tr>
        <?php endfor; ?>
    </table>

</body>

</html>