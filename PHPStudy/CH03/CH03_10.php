<?php
echo "<h3>do-while��</h3><hr/>";

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
echo "1~100������ �հ� : $tt<hr/>";
echo "<br><p>";

echo "1~100������ Ȧ�� �հ� : $odd<br>";
echo "1~100������ ¦�� �հ� : $even";

?>