<?php

echo "<h4>10~200 �ߵ带 ���ͷ� ��ȯ�Ͽ� ���</h4><br><hr/>";

echo "<table border = '1' width = 300>
    <tr bgcolor = #F5A9F2 align = center><td width = 100>�ߵ�</td>
    <td width = 200>����</td></tr>";
    
    for($yard = 10; $yard <= 200; $yard++){
        if($yard % 10 == 0){
            $meter = $yard*0.9144;
            echo "<tr align = center><td>$yard</td><td>$meter</td></tr>";
        }
    }

?>