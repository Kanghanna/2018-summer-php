<?php

echo "점수에 따른 학점 판별<hr/>";
$score = 46;
$num = $score / 10;

echo gettype($num)."<br>"; //score변수의 타입 출력

//$num = (int)($score / 10);
settype($num, 'integer'); //타입의 변환

echo gettype($num)."<br>";

echo "입력된 점수 : $score<br>";

switch($num){
case 6 :
    $class = "D";
    break;
case 7 :
    $class = "C";
    break;
case 8 :
    $class = "B";
    break;
case 9 :
    $class = "A";
    break;
default :
    $class = "F";
}

    echo "학점 : $class";
    
    if($score >= 60 && $score % 10 >= 5 || $score == 100)
    echo "+";

?>