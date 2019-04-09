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

echo "<h4>버블 정렬을 이용한 배열 원소 정렬</h4><hr/>";

$num = array(15,13,9,7,6,12,19,30,28,26);
$count = 10;

echo "정렬 수행 전 : ";
foreach($num as $value)
    echo "$value"." ";
echo "<br><hr/>";
for($a = 0; $a < $count-1; $a++){
    for($b = 0; $b < $count-($a+1); $b++){
        $c = $b+1;
        if($num[$b] > $num[$c]){
            $temp = $num[$b];
            $num[$b] = $num[$c];
            $num[$c] = $temp;
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