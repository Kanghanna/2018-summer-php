<?php
echo "1. �ڰ��� ���� ���� - �ʱ� 60 �̻� �׸��� �Ǳ� 70 �̻�<hr/>";
$pilgi = 65;
$silgi = 78;
$result = "���հ�";

if($pilgi >= 60 && $silgi >= 70)
    $result = "�հ�";

echo "�ʱ� ���� : $pilgi, �Ǳ� ���� : $silgi<br>";
echo "��� : $result";

echo "<p><p>";
echo "2. �ڰ��� ���� ���հ� ���� - �ʱ� 60 �̸� �Ǵ� �Ǳ� 70 �̸�<hr/>";
$pilgi = 85;
$silgi = 68;
$result = "�հ�";

if($pilgi < 60 || $silgi < 70)
    $result = "���հ�";

echo "�ʱ� ���� : $pilgi, �Ǳ� ���� : $silgi<br>";
echo "��� : $result";

?>