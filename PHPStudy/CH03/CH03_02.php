<?php
echo "1. 자격증 시험 판정 - 필기 60 이상 그리고 실기 70 이상<hr/>";
$pilgi = 65;
$silgi = 78;
$result = "불합격";

if($pilgi >= 60 && $silgi >= 70)
    $result = "합격";

echo "필기 점수 : $pilgi, 실기 점수 : $silgi<br>";
echo "결과 : $result";

echo "<p><p>";
echo "2. 자격증 시험 불합격 판정 - 필기 60 미만 또는 실기 70 미만<hr/>";
$pilgi = 85;
$silgi = 68;
$result = "합격";

if($pilgi < 60 || $silgi < 70)
    $result = "불합격";

echo "필기 점수 : $pilgi, 실기 점수 : $silgi<br>";
echo "결과 : $result";

?>