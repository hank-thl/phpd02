<meta charset="UTF-8">
<?php
    $mysqli = new mysqli('localhost','root','root','ispan',3306);
    $mysqli->set_charset('utf8');

    
    $id = 2;
    $sql = "DELETE FROM cust WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    
    // var_dump($stmt);
    $stmt->bind_param('i',$id);
    $stmt->execute();
    
?>