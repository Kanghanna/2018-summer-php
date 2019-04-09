<?php
echo "<h3>do-while문</h3><hr/>";

$i = 1;

do{
    echo "$i ";
    if($i % 10 == 0) echo "<br>";
    
    if($i % 2 == 0)
        $even += $i;
    else $odd += $i;
        
        $tt += $i;
        $i++;
}while($i <= 100);
    
        

echo "<hr/><p>";
echo "1~100까지의 합계 : $tt<hr/>";
echo "<br><p>";

echo "1~100까지의 홀수 합계 : $odd<br>";
echo "1~100까지의 짝수 합계 : $even";

?>