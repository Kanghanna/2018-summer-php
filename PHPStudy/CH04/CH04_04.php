<?php

echo "foreach�� - �Ϲ� �迭<hr/>";

$num = array(11,22,33,44,55);

foreach($num as $value)
    echo "���� \$value = $value<br>";

echo "<p>";    
    
echo "foreach�� - ���� �迭<hr/>";

$season = array("��"=>"����","����"=>"����","����"=>"��","�ܿ�"=>"�Ѷ��");

foreach($season as $fruit)
    echo "���� ���� \$fruit = $fruit<br>";

?>