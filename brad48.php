<meta charset="UTF-8">
<?php
    $mysqli = new mysqli('localhost','root','root','ispan',3306);
    // if($mysqli){
    //     echo "OK";
    // }else{
    //     echo "XX";
    // }
    $mysqli->set_charset('utf8');


    // $sql = "INSERT INTO cust(cname, tel, birthday) VALUES ('Brad','123','1999-01-23')";
    // $result = $mysqli->query($sql);
    // var_dump($result);
    // if($mysqli->query($sql)){
    // }else{
    // }

    $cname = 'Eric'; $tel = '321'; $birthday = '1991-11-22';
    $sql = "INSERT INTO cust(cname,tel,birthday) VALUES (?,?,?)";
    $stmt = $mysqli->prepare($sql);
    var_dump($stmt);
    $stmt->bind_param('sss',$cname,$tel,$birthday);
    $stmt->execute();
    
?>