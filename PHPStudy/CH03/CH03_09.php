<?php
echo "<h3>while문</h3><hr/>";

$i = 1;
while($i <= 100){
    echo "$i&nbsp&nbsp&nbsp";
    if($i % 10 == 0) echo "<br>";
    
    if($i % 2 == 0)
        $even += $i;
    else $odd += $i;
    
    $tt += $i;
    $i++;
}
echo "<p>";
echo "1~100까지의 합계 : $tt";
echo "<br><p>";

echo "1~100까지의 홀수 합계 : $odd<br>";
echo "1~100까지의 짝수 합계 : $even";

?>