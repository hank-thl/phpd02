<?php
    include('sql.php');  // 連線資料庫

    spl_autoload_register(function($className){
        require_once $className. '.php';
    });

    $myquery = new MyQuery($mysqli);  // 將mysqli傳入MyQuery類別
    $name = $myquery->getProductData(131,'name');
    $tel = $myquery->getProductData(127,'tel');
    echo "$name:$tel <hr>";

    $allAddr = $myquery->getAllAddress('addr LIKE "%中市%"');
    // echo count($allAddr);   // 查看array中有多少筆資料
    // var_dump($allAddr) ;
    foreach($allAddr as $address){
        echo "$address->addr <br>";
    }
?>