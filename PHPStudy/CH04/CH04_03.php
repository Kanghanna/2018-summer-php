<?php

$student[] = 2201;
$student[] = 2204;
$student[] = 2210;
$student[] = 2220;

$student["������"] = 2219;
$student["������"] = 2218;
$student[] = 2215;

echo "\$stuid[0] = $student[0]<br>";
echo "\$stuid[0] = $student[1]<br>";
echo "\$stuid[0] = $student[2]<br>";
echo "\$stuid[0] = $student[3]<br>";

echo "\$student[\"������\"] = ".$student["������"]."<br>";
echo "\$student[\"������\"] = ".$student["������"]."<br>";
echo $student["������"];
echo "<br>";
echo "\$student[4] = $student[4]<br>";
echo "<p>�ε��̵� �迭�� �����迭 �ʱ�ȭ<hr/>";

$stu = array(2202, "name"=>"���ѳ�", "�ּ�"=>"����",18, "����"=>"ö��", "jumsu"=>88);

echo "�й� : $stu[0]<br>";
echo "�̸� : ".$stu["name"]."<br>";
echo "�ּ� : ".$stu["�ּ�"]."<br>";
echo "���� : $stu[1]<br>";
echo "���� : ".$stu["����"]."<br>";
echo "���� : ".$stu["jumsu"]."<br>";

?>