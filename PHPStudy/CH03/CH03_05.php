<?php

echo "������ ���� ���� �Ǻ�<hr/>";
$score = 46;
$num = $score / 10;

echo gettype($num)."<br>"; //score������ Ÿ�� ���

//$num = (int)($score / 10);
settype($num, 'integer'); //Ÿ���� ��ȯ

echo gettype($num)."<br>";

echo "�Էµ� ���� : $score<br>";

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

    echo "���� : $class";
    
    if($score >= 60 && $score % 10 >= 5 || $score == 100)
    echo "+";

?>