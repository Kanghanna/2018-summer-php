<?php
//연관 배열
// 왼쪽에는 첨자에 해당하는 문자열
// 오른쪽에는 저장할 값 입력
// 배열 이름 = array("첨자"=>값, "첨자"=>값, "첨자"=>값);

echo "<h4>연관 배열 초기화</h4><hr/>";

$php_flower = array("개나리"=>123, "홍벚꽃"=>456,
              "백장미"=>789, "백합"=>369, "무궁화"=>468);

echo "<5종류 꽃><hr/>";
echo "\$php_flower[\"개나리\"]=".$php_flower["개나리"]."<br>";
echo "\$php_flower[\"홍벚꽃\"]=".$php_flower["홍벚꽃"]."<br>";
echo "\$php_flower[\"백장미\"]=".$php_flower["백장미"]."<br>";
echo "\$php_flower[\"백합\"]=".$php_flower["백합"]."<br>";
echo "\$php_flower[\"무궁화\"]=".$php_flower["무궁화"]."<br>";


?>