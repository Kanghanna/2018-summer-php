<?php

echo "<h4>���� �迭 - ���ڿ� ÷�ڸ� �̿��� �հ�� ���</h4><hr/>";

$onepiece = array("����"=>99, "����"=>92, "����"=>80,
                "����"=>100, "�κ�"=>75);

echo "\$onepiece[\"����\"] = ".$onepiece["����"]."<br>";
echo "\$onepiece[\"����\"] = ".$onepiece["����"]."<br>";
echo "\$onepiece[\"����\"] = ".$onepiece["����"]."<br>";
echo "\$onepiece[\"����\"] = ".$onepiece["����"]."<br>";
echo "\$onepiece[\"�κ�\"] = ".$onepiece["�κ�"]."<br>";

foreach($onepiece as $num)
           $sum += $num; 


$avg = $sum / 5;

echo "<hr/> 5���� �հ� ���� = ".$sum."<br>";
echo "5���� ��� ���� = $avg <br>";
?>