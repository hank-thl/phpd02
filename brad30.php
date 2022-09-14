<?php 
    // 1.畫布
    // 2.作畫
    // 3.輸出（browser / file）
    // 4.清除

    $rate = $_GET['rate'];
    $width = 400;
    $gd = imagecreate($width, 20);

    // echo gettype($gd);


    $red = imagecolorallocate($gd, 255,0,0);
    imagefilledrectangle($gd,0,0,$width,20,$red);
    $yellow = imagecolorallocate($gd, 255,255,0);
    imagefilledrectangle($gd,0,0,$width*$rate/100,20,$yellow);

    // 定義頁面型態，不可有其他輸出
    header('Content-type: image/jpeg');
    imagejpeg($gd);
    imagedestroy($gd);
?>