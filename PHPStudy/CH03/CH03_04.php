<?php

echo "������ ���� ���� �Ǻ�<hr/>";
$score = 66;
$class;

echo "�Էµ� ���� : $score<br>";

if($score >= 90)
    $class = "A";
else if($score >= 80)
    $class = "B";
else if($score >= 70)
    $class = "C";
else if($score >= 60)
    $class = "D";
else if($score >= 0)
    $class = "F";

    echo "���� : $class";
    
    if($score >= 60 && $score % 10 >= 5 || $score == 100)
    echo "+";

?>