<?php

session_start();

unset($_SESSION[userid]);
unset($_SESSION[username]);
unset($_SESSION[userpw]);
unset($_SESSION[time]);

echo "4개의 변수 세션 정보 삭제<p>";

$time = date('y-m-d(H:i:s)',$_SESSION[time]);

echo "1. userid : $_SESSION[userid] <br>";
echo "2. username : $_SESSION[username] <br>";
echo "3. userpasswd : $_SESSION[userpw] <br>";
echo "4. time : $_SESSION[time] <br>";
?>