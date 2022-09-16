<?php
    $filename = $_REQUEST['filename'];
    $content = $_REQUEST['content'];

    $fp = fopen("myfile/{$filename}", 'w');

    fwrite($fp,$content);
    fclose($fp);

    header("Location: myfile/{$filename}")
?>