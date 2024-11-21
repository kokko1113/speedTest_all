<?php
if (isset($_GET["pass"])) {
    $count = 1;
    $pass = $_GET["pass"];
    if (strlen($pass) < 8) {
        $message = "非常に弱い（パスワードは8文字以上である必要があります）";
    } else {
        if (preg_match("/[a-z]/", $pass)) $count++;
        if (preg_match("/[A-Z]/", $pass)) $count++;
        if (preg_match("/[0-9]/", $pass)) $count++;
        if (preg_match("/\W/", $pass)) $count++;

        if($count==2){
            $message = "弱い";
        }else if($count==3){
            $message = "中程度";
        }else if($count==4){
            $message = "強い";
        }else if($count==5){
            $message = "非常に強い";
        }else{
            $message = "非常に弱い";
        }
    }
    echo "パスワードの強度:" . $message;
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
        パスワード:<input type="text" name="pass">
        <button>強度をチェック</button>
    </form>
</body>

</html>