<?php

echo "<h4>1~100 �ڿ��� �� �Ҽ� ���</h4><br><hr/>";

for($i = 1; $i < 1000; $i++){
    if($i % 2 != 0 || $i % 3 != 0 || $i % 5 != 0){
        echo "$i&nbsp";
        $count++;
    }
    
    if($count == 10){
        echo "<br>";
        $count = 0;
    }
        
}

?>