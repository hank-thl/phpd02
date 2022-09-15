<?php
    $account =  $_REQUEST['account'];
    $password =  $_REQUEST['password'];
    // echo $account;
    foreach($_REQUEST as $k => $v){
        if(gettype($v) == 'array'){
            echo "{$k}=><br>";
            foreach($v as $habbit){
                echo "{$habbit}<br>";
            }
        }else{
            echo "{$k}=>{$v}<br>";

        }

    }
?>