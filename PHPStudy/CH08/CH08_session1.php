<?php

session_start(); //코드 맨 처음에 설정하기


echo "세션 시작<hr>";

$_SESSION[userid] = "hanna";
$_SESSION[username] = "강한나";
$_SESSION[userpw] = "1250";
$_SESSION[time] = time() + 10;

echo "4개의 변수를 세션 정보로 등록 성공<p>";

$time = date('y-m-d(H:i:s)',$_SESSION[time]);

echo "1. userid : $_SESSION[userid] <br>";
echo "2. username : $_SESSION[username] <br>";
echo "3. userpasswd : $_SESSION[userpw] <br>";
echo "4. time : $_SESSION[time] <br>";

?>