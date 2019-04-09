<?php

//setcookie : 쿠키 생성
$uid = setcookie("userid","hanna");
$name = setcookie("username","강한나");
$passwd = setcookie("userpasswd","0324",time()+10);

if($uid and $name and $passwd)
    echo "userid, username, userpasswd cookie 생성 완료!";

?>