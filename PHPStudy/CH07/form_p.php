<?php

echo "���̵� : ".$_POST[id]."<br>";
echo "�̸� : ".$_POST[name]."<br>";

echo "��й�ȣ : ".$_POST[password]."<br>";
echo "��й�ȣ Ȯ�� :<br>";

if($_POST[male] == "male"){
    echo "���� : ".$_POST[male]."<br>";
}else echo "���� : ".$_POST[female]."<br>";

echo "�޴���ȭ : ".$_POST[num]."-".$_POST[num2].
      "-".$_POST[num3]."<br>";

echo "�ּ� : ".$_POST[adress]."<br>";

echo "��� : ";

if($_POST[movie] == "yes")
    echo "��ȭ ����&nbsp";
if($_POST[read] == "yes")
    echo "���� &nbsp";
if($_POST[shopping] == "yes")
        echo "����&nbsp";
if($_POST[sport] == "yes")
        echo "�&nbsp";
echo "<br>�ڱ�Ұ� : ".$_POST[introduce]."<br>";


