<?php

echo "foreach문 - 일반 배열<hr/>";

$num = array(11,22,33,44,55);

foreach($num as $value)
    echo "변수 \$value = $value<br>";

echo "<p>";    
    
echo "foreach문 - 연관 배열<hr/>";

$season = array("봄"=>"딸기","여름"=>"수박","가을"=>"감","겨울"=>"한라봉");

foreach($season as $fruit)
    echo "계절 과일 \$fruit = $fruit<br>";

?>