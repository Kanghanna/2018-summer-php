<?php

$uid = setcookie("userid","");
$name = setcookie("username","");
$passwd = setcookie("userpasswd","");

if($uid and $name and $passwd)
    echo "userid, username, userpasswd cookie ���� �Ϸ�!";
    
    ?>