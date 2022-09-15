<?php
    // @抑制錯誤訊息 
    $fp = @opendir('/') or die('Server Busy');
    // echo gettype($fp);

    while($file = readdir($fp)){
        echo $file . '<br>';

    }
    
    closedir($fp);

?>