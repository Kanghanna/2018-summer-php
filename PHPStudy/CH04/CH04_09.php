<?php

echo "<h4>2���� �迭 �ʱ�ȭ �� ���</h4><hr/>";

$score = array(
    array(88,98,96,77,63),
    array(86,77,66,86,93),
    array(74,83,95,86,97) );

for($i = 0; $i < 3; $i++){
    $k = $i + 1;
    echo "< $k ��° �л��� ���� ><br>";
    for($j = 0; $j < 5; $j++)
    echo "\$score[$i][$j] = $score[$i][$j]<br/>";
 
    echo "<br/>";
}

for($i = 1; $i <= 3; $i++){
    
    for($j = 0; $j < 5; $j++)
    $sum += $score[$i][$j];
    
    $avg = $sum;
    echo "$i ��° �л��� ���� => �հ� : $sum / ��� : $avg<br/>";

}
?>
