<?php

echo "������ ǥ �����<hr/>";

echo "<table border = '1'>";
echo "<tr>";
$j = 2;
while($j <= 9){
echo "<td align = center bgcolor = #>{$j}��</td>";
echo "</tr>";
$j++;
}

$i = 1;
while($i < 10){
    echo "<tr>";
    
    $j = 2;
    while($j < 10){
        $tt = $j * $i;
        echo "<td align = center>$j x $i = $tt</td>";
    }$j++;
    
    echo "</tr>";
    $i++;
}
echo "</table>";
?>