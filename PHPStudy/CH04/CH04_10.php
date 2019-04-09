<?php

echo "<h4>연관 배열 - 문자열 첨자를 이용한 합계와 평균</h4><hr/>";

$onepiece = array("루피"=>99, "조로"=>92, "쵸파"=>80,
                "나미"=>100, "로빈"=>75);

echo "\$onepiece[\"루피\"] = ".$onepiece["루피"]."<br>";
echo "\$onepiece[\"조로\"] = ".$onepiece["조로"]."<br>";
echo "\$onepiece[\"쵸파\"] = ".$onepiece["쵸파"]."<br>";
echo "\$onepiece[\"나미\"] = ".$onepiece["나미"]."<br>";
echo "\$onepiece[\"로빈\"] = ".$onepiece["로빈"]."<br>";

foreach($onepiece as $num)
           $sum += $num; 


$avg = $sum / 5;

echo "<hr/> 5명의 합계 점수 = ".$sum."<br>";
echo "5명의 평균 점수 = $avg <br>";
?>