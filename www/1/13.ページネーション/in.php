<?php
$json = json_decode(file_get_contents("./data.json"), true);
if (count($json) % 10 == 0) {
    $max = count($json) / 10;
} else {
    $max = intval(count($json) / 10) + 1;
}
$page = empty($_GET["page"]) ? 1 : $_GET["page"];
$next = min($max, $page + 5);
$prev = max(0, $page - 5);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $page . "ページ" ?></h1><br>

    <?php for ($i = $page * 10 - 10; $i < $page * 10; $i++): ?>
        <?php echo $json[$i]["name"] . ":" . $json[$i]["age"]; ?>
        <br>
    <?php endfor; ?>

    <?php if ($page > 1): ?>
        <a href="in.php?page=<?php echo $prev ?>">←</a>
    <?php endif; ?>

    <?php if ($page > 2): ?>
        <a href="in.php?page=<?php echo $page - 2 ?>"><?php echo $page - 2 ?></a>
    <?php endif; ?>
    <?php if ($page > 1): ?>
        <a href="in.php?page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a>
    <?php endif; ?>

    <a href="in.php?page=<?php echo $page ?>"><?php echo $page ?></a>

    <?php if ($page + 1 < $max): ?>
        <a href="in.php?page=<?php echo $page + 1 ?>"><?php echo $page + 1 ?></a>
    <?php endif; ?>
    <?php if ($page + 2 < $max): ?>
        <a href="in.php?page=<?php echo $page + 2 ?>"><?php echo $page + 2 ?></a>
    <?php endif; ?>

    <?php if ($page < $max): ?>
        <a href="in.php?page=<?php echo $next ?>">→</a>
    <?php endif; ?>
</body>

</html>