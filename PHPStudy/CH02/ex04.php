<?php
//청소년 입장료 5000원, 성인입장료 8000원
//입장료 구입 : 청소년 3매, 성인 2매

$num1 = 5000;
$num2 = 8000;
$child = 3;
$adult = 2;
$tot = $num1 * $child + $num2 * $adult;

echo "공원 입장료 계산";
echo "<hr/><br>";
echo "전체 입장료:{$tot}원";

?>