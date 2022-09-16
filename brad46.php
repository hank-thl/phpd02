<?php
    // 建構式 做初始化 /  new 實作產生  /  屬性表示狀態

    class Bike{
        // private 僅可在class內使用
        private $speed;

        function __construct()
        {
            $this->speed = 0;
            // echo 'Bike()';   //到此一遊

        }

        function upSpeed(){
            $this->speed = $this->speed<1?1:$this->speed*1.2;
        }
        function downSpeed(){
            $this->speed = $this->speed<1?0:$this->speed*0.7;
        }
        function getSpeed(){
            return $this->speed;
        }
    }

    $myBike = new Bike();$urBike = new Bike();
    // var_dump($myBike);
    $myBike->upSpeed();
    $myBike->upSpeed();
    $myBike->upSpeed();
    $myBike->upSpeed();

    $urBike->upSpeed();
    $urBike->upSpeed();
    $urBike->upSpeed();
    $urBike->upSpeed();
    $urBike->downSpeed();
    $urBike->upSpeed();

    echo "myBike : {$myBike->getSpeed()}<br>";
    echo "urBike : {$urBike->getSpeed()}<br>";
    echo "<hr>";

    while($myBike->getSpeed()<10){
        $myBike->upSpeed();
    }
    echo "myBike : {$myBike->getSpeed()}<br>";


?>

<script>
    
</script>