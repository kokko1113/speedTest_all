<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./thank.php" method="get">
        <table>
            <tr>
                <td>名前</td>
                <td><input type="text" required></td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td><input type="email"></td>
            </tr>
            <tr>
                <td>電話番号</td>
                <td><input type="tel"></td>
            </tr>
        </table>
        <button type="submit">送信</button>
    </form>
</body>

</html>