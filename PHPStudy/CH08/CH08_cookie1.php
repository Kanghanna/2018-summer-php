<?php

//setcookie : ��Ű ����
$uid = setcookie("userid","hanna");
$name = setcookie("username","���ѳ�");
$passwd = setcookie("userpasswd","0324",time()+10);

if($uid and $name and $passwd)
    echo "userid, username, userpasswd cookie ���� �Ϸ�!";

?>