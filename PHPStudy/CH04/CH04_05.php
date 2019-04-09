<?php

echo "<h4>array() 함수 이용 - 문자 출력</h4><hr/>";
$week = array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");

foreach($week as $day)
    echo "$day&nbsp";

echo "<p><h4>요일 - sort() 함수를 이용한 문자 정렬</h4><hr/>";

sort($week); //알파벳 순으로 자동 정렬

foreach($week as $day)
    echo "$day&nbsp";

    
echo "<p><h4>과일 - sort() 함수를 이용한 문자 정렬</h4><hr/>";
    
$fruits = array("watermelon","orange","strawbarry","banana",
            "apple","Mango","Peach");

sort($fruits);

foreach($fruits as $fruits)
    echo "$fruits&nbsp";

    

    