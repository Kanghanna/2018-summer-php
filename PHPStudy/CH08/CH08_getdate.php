<?php
//getdate()함수

echo "날자 및 시간 함수<hr>";

$today = getdate();

foreach($today as $key => $value)
    echo $key." ==> ".$value."<br>";

echo "<hr>";

// 2018년 8월 1일 Wednesday
// 9시 21분 50초
// 2018년이 00일 남았어요....파이팅 합시다~!

$day = 365 - $today['yday'];

echo "오늘 날짜 : ".$today['year']."년 ".$today['mon']."월 ".
       $today['mday']."일 ".$today['weekday']."<br>";
echo "지금 날짜 : ".$today['hours']."시 ".$today['minutes']."분 ".
        $today['seconds']."초<br>";
echo $today['year']."년이 ".$day."일 남았어요... 파이팅 합시다~!";

?>