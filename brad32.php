<?php
    // 1.畫布
    // 2.作畫
    // 3.輸出（browser / file）
    // 4.清除

    $gd = imagecreatefromjpeg('imgs/coffee.jpeg');
    $yellow = imagecolorallocate($gd,255,255,0);

    //           畫布 大小 角度 x軸 y軸 顏色 字體 內容
    imagettftext($gd,24,30,50,150,$yellow,'fonts/CircularStd-Bold.ttf','Hello, World');


    header('Content-type: image/jpeg');
    // 輸出到browser
    imagejpeg($gd);

    // 另存新檔
    imagejpeg($gd, 'imgs/brad.jpeg');
    imagedestroy($gd);
?>