<?php
$img_width = $base_image->getImageWidth();
$img_height = $img_width / 2;

// 透かし画像の倍率を変更
$wartermark->sampleImage($img_width, $img_height);
$base_image->compositeImage(
    $wartermark,
    \Imagick::COMPOSITE_SOFTLIGHT,
    ($base_image->getImageWidth() - $img_width) / 2,
    ($base_image->getImageHeight() - $img_height) / 2
    );
    
    // ベース画像を上書き
    $base_image->writeImage('base.jpg');
?>
