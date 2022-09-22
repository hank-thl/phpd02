<?php
    include('sql.php');

    spl_autoload_register(function($className){
        require_once $className. '.php';
    });
    session_start();
    // 登入後才可進到這個頁面
    if(!$_SESSION['member']) header('Location: login.php');

    // 從session中抓取資料
    $member = $_SESSION['member'];
    $cart = $_SESSION['cart'];

    $icon = base64_encode($member->icon);

    // 做分頁 抓出總共有幾筆資料
    $sql = "SELECT count(*) as `sum` FROM food";
    $result = $mysqli->query($sql);
    $data = $result->fetch_object();
    $total = $data->sum;


    define('RPP',10); // 定義一頁有10筆
    $rpp = RPP;
    $page = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    $prev = $page == 1?1:$page - 1;

    $totalPages = ceil($total / $rpp);
    $next = $page == $totalPages?$page:$page + 1;

    $start =($page-1)*$rpp;


    $sql = "SELECT * FROM food ORDER BY id LIMIT {$start}, {$rpp}";
    $result = $mysqli->query($sql);
?>
Welcome, <?php echo $member->realname ?><br>
<img style="width:100px" src="data:<?php echo $member->icontype; ?>;base64, <?php echo $icon; ?>">
<hr>
<a href="logout.php">Logout</a>
<hr>
<a href="?page=<?php echo $prev ?>">上一頁</a> | <a href="?page=<?php echo $next ?>">下一頁</a>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Tel</th>
        <th>City</th>
        <th>Town</th>
        <th>Image</th>
    </tr>
    <?php
        while($food = $result->fetch_object()){
            echo '<tr>';
            echo "<td>{$food->id}</td>";
            echo "<td>{$food->name}</td>";
            echo "<td>{$food->tel}</td>";
            echo "<td>{$food->city}</td>";
            echo "<td>{$food->town}</td>";
            echo "<td><img style='max-width:400px' src='{$food->pic}'></td>";
            echo '</tr>';
        }
    ?>
</table>