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

echo "<h4>����ȭ �� ���� ������ �̿��� �迭 ���� ����</h4><hr/>";

$num = array(15,13,9,7,6,12,19,30,28,26);
$count = 10;

echo "���� ���� �� : ";
foreach($num as $value)
    echo "$value"." ";

    echo "<br><hr/>";
    
    //���� ���� 2
    for($a = 0; $a < $count-1; $a++){
        $change = 1;
        for($b = 0; $b < $count-($a+1); $b++){
            $c = $b+1;
            if($num[$b] > $num[$c]){
                $temp = $num[$b];
                $num[$b] = $num[$c];
                $num[$c] = $temp;
                $change = 0;
            }
        }
        $k = $a + 1;
        echo "pass $k : ";
        foreach($num as $value)
            echo $value." ";
            echo "<br>";
            
        if($change == 1)
            break;
    }
    
    
    echo "<hr/>���� ���� ��(��������) : ";
    foreach($num as $value)
        echo $value." ";
        
        
?>