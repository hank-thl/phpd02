<meta charset="UTF-8">
<?php
    
    include('sql.php');

    // 註冊後取得account 進行註冊
    if(isset($_REQUEST['account'])){  
        $account = $_REQUEST['account'];
        $password = password_hash($_REQUEST['password'],PASSWORD_DEFAULT) ;
        $realname = $_REQUEST['realname'];

        $icon = null;
        if($_FILES['icon']['error'] == 0){
            $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name'])) ;
        }
        $sql = "INSERT INTO member (account,`password`,realname,icon) VALUES
                ('{$account}','{$password}','{$realname}','{$icon}')";

        if($mysqli->query($sql)){
            header('Location:login.php');
        }else{
            echo 'Error' . $sql ;
        }
        
        
    }
?>
<script>
    var xhttp = new XMLHttpRequest();


    function checkNewAccount() {
        var account = document.getElementById('account').value;
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                if (xhttp.responseText != 0) {
                    //帳號重複
                    document.getElementById('mesg').innerHTML = "帳號重複";
                } else {
                    document.getElementById('mesg').innerHTML = "帳號可使用";
                }
            }
        }

        
        xhttp.open('GET', 'isNewAccount.php?account=' + account, true);
        xhttp.send();
    }
</script>
<form method="POST" enctype="multipart/form-data">
    Account:<input type="text" id="account" name="account" onchange="checkNewAccount()">
    <span id="mesg"></span>
    <br>
    Password:<input type="password" name="password"><br>
    Realname:<input type="text" name="realname"><br>
    Icon:<input type="file" name="icon"><br>
    <input type="submit" value="Register"><br>
</form>