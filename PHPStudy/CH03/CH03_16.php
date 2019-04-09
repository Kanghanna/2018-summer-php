<?php

echo "<h4>10~200 야드를 미터로 변환하여 출력</h4><br><hr/>";

echo "<table border = '1' width = 300>
    <tr bgcolor = #F5A9F2 align = center><td width = 100>야드</td>
    <td width = 200>미터</td></tr>";
    
    for($yard = 10; $yard <= 200; $yard++){
        if($yard % 10 == 0){
            $meter = $yard*0.9144;
            echo "<tr align = center><td>$yard</td><td>$meter</td></tr>";
        }
    }

?>