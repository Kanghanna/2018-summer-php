<?php

echo "<h4>���ڿ� ���� ���� �Լ�</h4><hr>";

$tel = "010-3350-6860-8888";

$num_tel = strlen($tel);

echo "strlen() �Լ� ��� : $num_tel<br>";

$tel1 = substr($tel, 0, 3);
$tel2 = substr($tel, 4, 4);
$tel3 = substr($tel, 9, 4);

echo "substr() �Լ� ��� : $tel1 $tel2 $tel3<br>";

$phone = explode("-", $tel);

echo "explode() �Լ� ��� : <br>";
foreach($phone as $p)
    echo $p."<br>"
?>