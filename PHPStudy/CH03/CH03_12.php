<?php

echo "50~500 ¦���� �� ��� - do~while ���<hr/><br>";

$i = 50;

do{
    if($i % 2 == 0){
        echo "$i&nbsp&nbsp&nbsp";
        $sum += $i;
        $count++;
    }
    
    if($count == 10){
        echo "<br>";
        $count = 0;
    }
    
    $i++;
    
}while($i <= 500);

    echo "<hr/>50~500 ¦�� �հ� : $sum";
?>