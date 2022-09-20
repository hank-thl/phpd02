<h1>Page 2</h1>
<hr>
<?php
    include('bradapis.php');    
    session_start();

    $var = $_SESSION['var'];
    // echo $var . "<br>";
    // foreach($var as $v){
    //     echo "{$v}<br>";
    // }
    echo "{$var->sum()}:{$var->avg()}<br>";

?>
<a href="brad59.php">Logout</a>