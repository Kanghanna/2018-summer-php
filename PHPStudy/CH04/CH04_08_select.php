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

echo "<h4>���� ������ �̿��� �迭 ���� ����</h4><hr/>";

$num = array(99,90,80,70,60,50,40,30,20,10);
$count = 10;

echo "���� ���� �� : ";
foreach($num as $value)
    echo "$value"." ";
    
    echo "<br><hr/>";
    
    //���� ���� 1
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
    
    
    echo "<hr/>���� ���� ��(��������) : ";
    foreach($num as $value)
        echo $value." ";
        
        
        ?>