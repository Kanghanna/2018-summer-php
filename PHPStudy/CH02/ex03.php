<?php
//지불금액 : 3000, 물건 가격 :800, 구매 개수 : 3
$money = 3000;
$cost = 800;
$number = 3;
$change = $money - $cost * $number;
echo "거스름돈 계산";
echo "<hr/><br>";
echo "물건 가격:".$cost."<br>";
echo "구매 개수:".$number."<br>";
echo "지불 금액:".$money."<br>";
echo "<hr/><br>";
echo "거스름돈:".$change." 원";

?>
