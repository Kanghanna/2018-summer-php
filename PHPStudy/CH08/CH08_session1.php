<?php

session_start(); //�ڵ� �� ó���� �����ϱ�


echo "���� ����<hr>";

$_SESSION[userid] = "hanna";
$_SESSION[username] = "���ѳ�";
$_SESSION[userpw] = "1250";
$_SESSION[time] = time() + 10;

echo "4���� ������ ���� ������ ��� ����<p>";

$time = date('y-m-d(H:i:s)',$_SESSION[time]);

echo "1. userid : $_SESSION[userid] <br>";
echo "2. username : $_SESSION[username] <br>";
echo "3. userpasswd : $_SESSION[userpw] <br>";
echo "4. time : $_SESSION[time] <br>";

?>