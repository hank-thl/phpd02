<?php
if (isset($_POST['account'])) {
    $account = $_POST['account'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT) ;
    $realname = $_POST['realname'];

    $mysqli = new mysqli('localhost', 'root', 'root', 'ispan', 3306);
    $mysqli->set_charset('utf8');



    $sql = "INSERT INTO member (account, password, realname) VALUES ('{$account}','{$password}','{$realname}')";
    if($mysqli->query($sql)){
        header("Location: brad53.php");
    }else{
        echo "XX";
    }
}
?>
<form method="POST">
    <input type="text" name="account"><br>
    <input type="password" name="password"><br>
    <input type="text" name="realname"><br>
    <input type="submit" value="Add"><br>
</form>