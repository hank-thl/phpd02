<?php
    include 'bradapis.php';

    $id = 'B123404320';

    if(checkTWId($id)){
        echo "OK";
    }else{
        echo "XX";
    }
?>