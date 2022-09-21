<?php
    include('sql.php');

    spl_autoload_register(function($className){
        require_once $className. '.php';
    });
    session_start();
    
    if(!isset($_REQUEST['account'])) header('Location: login.php');

    $account = $_REQUEST['account']; $password = $_REQUEST['password'];
    $sql = "SELECT * FROM member WHERE account = ?";

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s',$account);
    $stmt->execute();

    $result = $stmt->get_result();  //取得結果

    if($result->num_rows >0){
        $member = $result->fetch_object();  //拿出回傳的物件
        // echo "{$member->account}:{$member->password}";

        // 驗證密碼
        if(password_verify($password, $member->password)){
            $_SESSION['cart'] = new Cart();
            $_SESSION['member'] = $member;
            header('Location: main.php');
        }else{
            header('Location: login.php');
        }
    }else{
        header('Location: login.php');
    }
    
    
?>