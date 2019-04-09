<?php

echo "101~300 4의 배수 - while문<hr/><br>";

$i = 101;
$count = 0;
while($i <= 300){
      
      if($i % 4 == 0){
        $sum += $i;
        $count++;
        echo "$i&nbsp&nbsp&nbsp";
      }
      
      if($count == 10){
        echo "<br>";
        $count = 0;
      }
      
      $i++;
}

echo "<hr/>101~300 4의 배수 합계 : $sum";

?>