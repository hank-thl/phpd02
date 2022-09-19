<?php
    include('bradapis.php');

    $s1 = new Student('Brad', 90, 90 , 90);
    $s2 = new Student('Kevin',78,88,98);
    $s3 = new Student('Eric',60,60,60);

    echo "{$s1->getName()}: {$s1->sum()}: {$s1->avg()}<br>";
    echo "{$s2->getName()}: {$s2->sum()}: {$s2->avg()}<br>";
    echo "{$s3->getName()}: {$s3->sum()}: {$s3->avg()}<br>";

?>