<?php

echo "구구단 표 만들기<hr/>";

echo "<table border = '1'>";
echo "<tr>";
for($j = 2; $j <=9; $j++)
echo "<td align = center>{$j}단</td>";
echo "</tr>";

for($i = 1; $i < 10; $i++){
    
    echo "<tr>";
    for($j = 2; $j < 10; $j++){
        $tt = $j * $i;
        echo "<td align = center>$j x $i = $tt</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>