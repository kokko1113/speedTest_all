<?php

if (isset($_POST["path"]) && isset($_POST["name"]) && isset($_POST["type"])) {
    if ($_POST["type"] == "folder") {
        mkdir($_POST["path"] . "/" . $_POST["name"]);
    } else {
        file_put_contents($_POST["path"] . "/" . $_POST["name"], "");
    }
}

if (isset($_POST["path"]) && isset($_POST["content"])) {
    file_put_contents($_POST["path"], $_POST["content"]);
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_GET["edit"]) && $_GET["edit"] === "true") : ?>
        <form action="?dir=<?php echo dirname($_GET["path"]) ?>" method="post">
            <?php
            $content = file_get_contents($_GET["path"]);
            ?>
            <input type="text" name="path" value="<?php echo $_GET["path"] ?>" style="display: none;">
            <textarea name="content" cols="30" rows="30" value=""><?php echo htmlspecialchars($content, ENT_QUOTES, "UTF-8") ?></textarea>
            <input type="submit" value="保存">
        </form>
    <?php elseif (isset($_GET["add"]) && $_GET["add"] == true) : ?>
        <form action="?dir=<?php echo $_GET["path"] ?>" method="post">
            <select name="type" id="">
                <option value="folder">フォルダ</option>
                <option value="file">ファイル</option>
            </select>
            <input type="text" name="path" value="<?php echo $_GET["path"] ?>" style="display: none;">
            <input type="text" name="name" placeholder="ファイル名orフォルダ名">
            <input type="submit" value="追加">
        </form>
    <?php else : ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ファイルパス</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="?dir=<?php echo dirname($_GET["dir"], 2) ?>">..</a></td>
                </tr>
                <?php

                $files = glob($_GET["dir"] . '/*');
                foreach ($files as $path) {
                    echo $path;
                }
                ?>
                <?php foreach ($files as $key => $path) : ?>
                    <tr>
                        <?php if (is_dir($path)) : ?>
                            <td><a href="?dir=<?php echo $path ?>"><?php echo $path ?></a></td>
                            <td>
                            </td>
                        <?php else : ?>
                            <td><?php echo $path ?></td>
                            <td>
                                <a href="?edit=true&path=<?php echo $path ?>">編集</a>
                            </td>
                        <?php endif ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="?add=true&path=<?php echo $_GET["dir"] ?>">追加</a>
    <?php endif; ?>
</body>

</html>
