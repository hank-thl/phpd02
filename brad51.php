<meta charset="UTF-8">
<?php

use LDAP\Result;

    $mysqli = new mysqli('localhost','root','root','ispan',3306);
    $mysqli->set_charset('utf8');

    
   
    $sql = "SELECT id,cname,tel,birthday FROM cust";
    // $result = $mysqli->query($sql);
    // var_dump($result);

    // $row = $result->fetch_object();
    // echo "{$row->id}:{$row->cname}:{$row->tel}:{$row->birthday}<br>";
    // $row = $result->fetch_object();
    // echo "{$row->id}:{$row->cname}:{$row->tel}:{$row->birthday}<br>";
    // echo $result->num_rows . "<br>";

    // while($row = $result->fetch_object()){
    //     echo "{$row->id}:{$row->cname}:{$row->tel}:{$row->birthday}<br>";
    // }

    // var_dump($result->fetch_array());
    // while($row = $result->fetch_array()){
    //     echo "{$row['id']}:{$row['cname']}:{$row['tel']}:{$row['birthday']}<br>";
    // }
    $stmt = $mysqli->prepare($sql);
    $stmt->execute();
    $stmt->store_result();

    echo $stmt->num_rows . "<br>";
    $stmt->bind_result($id,$cname,$tel,$birthday);
    while($stmt->fetch()){
        echo "{$id}:{$cname}:{$tel}:{$birthday}<br>";
    }
    $stmt->free_result();
    $stmt->close();
?>