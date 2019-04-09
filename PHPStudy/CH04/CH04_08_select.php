<?php

/*
 $a = 10;
 $b = 20;

 echo "a : $a , b : $b<br>";

 $temp = $a;
 $a = $b;
 $b = $temp;
 echo "a : $a , b : $b";
 */

echo "<h4>선택 정렬을 이용한 배열 원소 정렬</h4><hr/>";

$num = array(99,90,80,70,60,50,40,30,20,10);
$count = 10;

echo "정렬 수행 전 : ";
foreach($num as $value)
    echo "$value"." ";
    
    echo "<br><hr/>";
    
    //선택 정렬 1
    for($a = 0; $a < $count-1; $a++){
        for($b = $a+1; $b < $count; $b++){
            if($num[$a] > $num[$b]){
                $temp = $num[$a];
                $num[$a] = $num[$b];
                $num[$b] = $temp;
            }
        }
        $k = $a + 1;
        echo "pass $k : ";
        foreach($num as $value)
            echo $value." ";
            echo "<br>";
    }
    
    
    echo "<hr/>정렬 수행 후(오름차순) : ";
    foreach($num as $value)
        echo $value." ";
        
        
        ?>