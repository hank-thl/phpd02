<meta charset="UTF-8">
<?php
    $mysqli = new mysqli('localhost','root','root','ispan',3306);
    $mysqli->set_charset('utf8');

    $cname = 'Justin'; $tel = '321'; $birthday = '1991-11-22';
    $id = 2;
    $sql = "UPDATE cust SET cname = ?, tel = ?, birthday = ? WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    
    // var_dump($stmt);
    $stmt->bind_param('sssi',$cname,$tel,$birthday,$id);
    $stmt->execute();
    
?>