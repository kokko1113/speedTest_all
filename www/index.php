<?php

function displayFolderTree($dir)
{
    // ターゲットディレクトリ内のファイルとディレクトリのリストを取得
    $files = scandir($dir);

    // ディレクトリ内のファイルとディレクトリを処理
    foreach ($files as $file) {
        // カレントディレクトリと親ディレクトリを無視
        if ($file != '.' && $file != '..') {
            // フルパスを取得
            $path = $dir . '/' . $file;
            
            // ディレクトリの場合は再帰的に処理
            if (is_dir($path)) {
                echo "<li>$file";
                echo "<ul>";
                displayFolderTree($path);
                echo "</ul>";
                echo "</li>";
            } else {
                // ファイルの場合はリンクを表示
                echo "<li><a href='$path'>$file</a></li>";
            }
        }
    }
}

// 表示したいディレクトリのパス
$targetDir = './'; // ここに表示したいディレクトリのパスを指定してください

echo "<ul>";
displayFolderTree($targetDir);
echo "</ul>";

?>
