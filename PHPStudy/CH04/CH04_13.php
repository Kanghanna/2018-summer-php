<?php

echo "1.call by reference<p>";

function swap1(&$a, &$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$i = 5; $j = 10;

echo "Before swap : i = $i , j = $j<br>";
swap1($i, $j);
echo "After swap : i = $i, j = $j<br>";


echo "<hr>2. Call by value(PHP �⺻ ����)<p>";

function swap2($a, $b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$i = 5; $j = 10;

echo "Before swap : i = $i , j = $j<br>";
swap2($i, $j);
echo "After swap : i = $i, j = $j<br>";


echo "<hr>3. Call by value (PHP �⺻ ����) - global ���� ����<p>";

function swap3($a, $b){
    global $$a, $$b; //���� ���� ����
    
    $temp = $$a;
    $$a = $$b;
    $$b = $temp;
}

$i = 5; $j = 10;

echo "Before swap : i = $i , j = $j<br>";
swap3($i, $j);
echo "After swap : i = $i, j = $j<br>";

?>