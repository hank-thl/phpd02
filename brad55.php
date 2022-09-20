<meta charset="UTF-8">
<?php
    include('sql.php');

    if(isset($_GET['editid'])){

        // 撈原資料
        $editid = $_GET['editid'];
        $sql = "SELECT * FROM member WHERE id = {$editid}";
        $result = $mysqli->query($sql);  // result接收執行結果
        $member = $result->fetch_object();  // fetch 取出迭代物件

    }
    
    if(isset($_POST['updateid'])){
        $updateid = $_POST['updateid'];
        $account = $_POST['account'];
        $password = $_POST['password'];
        $realname = $_POST['realname'];
        if(strlen(trim($password)) == 0 ){
            $sql = "UPDATE member SET account = '{$account}',".
                    "realname = '{$realname}' WHERE id = {$updateid}";
        }else{
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "UPDATE member SET account = '{$account}',".
                    "password = '{$password}',".
                    "realname = '{$realname}' WHERE id = {$updateid}";
        }
        if($mysqli->query($sql)){
            header('Location: brad53.php');
        }else{
            
        }

    }

?>
<h1>Edit</h1>
<form method="POST">
    <input type="hidden" name="updateid" value="<?php echo $editid ?>">
    <input type="text" name="account" value="<?php echo $member->account ?>"><br>
    <input type="password" name="password"><br>
    <input type="text" name="realname" value="<?php echo $member->realname ?>"><br>
    <input type="submit" value="Update"><br>
</form>