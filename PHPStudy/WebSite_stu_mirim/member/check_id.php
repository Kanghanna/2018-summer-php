<?php
//���̵� Ȯ��
$id = $_GET[id];
if(!$id){
    echo "���̵� �Է��ϼ���.";
}else {
    include "../lib/dbconn.php";
    
    $sql = "select id from member
            where id='$id'";
    
    $result = mysql_query($sql,$conn);
    $num_record = mysql_num_rows($result);
    
    if($num_record){
        echo "���̵� �ߺ��˴ϴ�!<br>";
        echo "�ٸ� ���̵� ����ϼ���.<br>";
    }
    else {
        echo "��밡���� ���̵��Դϴ�.";
    }
}
    mysql_close($conn);
?>