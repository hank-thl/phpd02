<?php
    include('bradapis.php');
    session_start();

    // $var = rand(1,49);
    // $var = [1,2,3,4,5];
    $var = new Student('Brad',90,80,40);

    // echo $var . '<br>';
    echo "{$var->sum()}:{$var->avg()}<br>";

    $_SESSION['var'] = $var;

    $var->setMath(100);  // 物件在session中 會傳遞修改後的狀態
    // $var[2]=100;  // 使用session注意給值的位置
?>
<a href="brad58.php">Next Page</a>