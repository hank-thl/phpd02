<?php
    include 'bradapis.php';

    $id = 'B123404320';

    if(checkTWId($id)){
        echo "OK";
    }else{
        echo "XX";
    }

    echo "<hr>";
    echo 'Random:'.createTWIdByRandom().'<br>';
    echo '女生:'.createTWIdByGender().'<br>';
    echo '男生:'.createTWIdByGender(true).'<br>';
    echo '嘉義:'.createTWIdByArea('I').'<br>';
    echo '高雄女生:'.createTWIdByBoth('S',false).'<br>';
     
?>