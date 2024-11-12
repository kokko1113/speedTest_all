<?php

$url = "./data.json";
$json = file_get_contents($url);
$arr = json_decode($json, true);
$aaa = $_GET["page"];
if (empty($aaa)) {
    $aaa = 1;
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
    <div class="pagination">
        <div class="fonts">
            <?php for ($i = $aaa * 10 - 10; $i <= $aaa * 10 - 1; $i++) : ?>
                <div class="font"><?php echo $arr[$i]["name"]; ?></div>
                <div class="font"><?php echo $arr[$i]["age"]; ?></div>
                <br>
            <?php endfor; ?>
        </div>

        <div>
            <?php if ($aaa > 5) : ?>
                <a href="index.php?page=<?php echo ($aaa - 5); ?>"><?php echo "☜"; ?></a>
            <?php endif; ?>

            <?php if ($aaa - 2 > 0) : ?>
                <a href="index.php?page=<?php echo ($aaa - 2); ?>"><?php echo $aaa - 2; ?></a>
            <?php endif; ?>
            <?php if ($aaa - 1 > 0) : ?>
                <a href="index.php?page=<?php echo ($aaa - 1); ?>"><?php echo $aaa - 1; ?></a>
            <?php endif; ?>
            <?php if ($aaa > 0) : ?>
                <a href="index.php?page=<?php echo ($aaa); ?>"><?php echo $aaa; ?></a>
            <?php endif; ?>
            <?php if ($aaa + 1 < 11) : ?>
                <a href="index.php?page=<?php echo ($aaa + 1); ?>"><?php echo $aaa + 1; ?></a>
            <?php endif; ?>
            <?php if ($aaa + 2 < 11) : ?>
                <a href="index.php?page=<?php echo ($aaa + 2); ?>"> <?php echo $aaa + 2; ?></a>
            <?php endif; ?>

            <?php if ($aaa < 6) : ?>
                <a href="index.php?page=<?php echo ($aaa + 5); ?>"> <?php echo "☞"; ?></a>
            <?php endif; ?>
        </div>

    </div>
</body>

<style>
    .pagination {
        display: flex;
        flex-direction: column;
    }

    .fonts {
        display: flex;
    }

    .font {
        padding: 0 5px;
    }
</style>

</html>