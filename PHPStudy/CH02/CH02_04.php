<?php

$a = 7;
$b = 8;

$a++;
$b--;

$b = $a * $b + 2; // 58
$c = $a + $b; // 66

echo "a : $a, b : $b, c : $c <br>";

$c = $a % $b; //8
$b = $a + 2; // 10
$a = $a * 3; // 24

echo "a : $a, b : $b, c : $c";