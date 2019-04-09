<?php

$student[] = 2201;
$student[] = 2204;
$student[] = 2210;
$student[] = 2220;

$student["허주희"] = 2219;
$student["최유라"] = 2218;
$student[] = 2215;

echo "\$stuid[0] = $student[0]<br>";
echo "\$stuid[0] = $student[1]<br>";
echo "\$stuid[0] = $student[2]<br>";
echo "\$stuid[0] = $student[3]<br>";

echo "\$student[\"허주희\"] = ".$student["허주희"]."<br>";
echo "\$student[\"최유라\"] = ".$student["최유라"]."<br>";
echo $student["최유라"];
echo "<br>";
echo "\$student[4] = $student[4]<br>";
echo "<p>인덱싱된 배열과 연관배열 초기화<hr/>";

$stu = array(2202, "name"=>"강한나", "주소"=>"구디",18, "별명"=>"철새", "jumsu"=>88);

echo "학번 : $stu[0]<br>";
echo "이름 : ".$stu["name"]."<br>";
echo "주소 : ".$stu["주소"]."<br>";
echo "나이 : $stu[1]<br>";
echo "별명 : ".$stu["별명"]."<br>";
echo "점수 : ".$stu["jumsu"]."<br>";

?>