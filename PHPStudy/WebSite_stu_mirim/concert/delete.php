<?php

session_start();

include "../lib/dbconn.php";

$userid = $_SESSION[userid];
$num = $_GET[num];

$sql = "select * from concert where num=$num";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$item_id = $row[id];

if($userid != $item_id){ //���� ���̵� != �۾��� ���̵�
    echo"<script>
         window.alert('�ٸ� ����ڴ� ���� �� �� �����ϴ�.');
         history.go(-1);
         </script>";
    exit;
}else{
    
    $copied_name[0] = $row[file_copied_0];
    $copied_name[1] = $row[file_copied_1];
    $copied_name[2] = $row[file_copied_2];
    
    for($i = 0; $i < 3; $i++){
        if($copied_name[$i]){
            $image_name = "./data/".$copied_name[$i];
            unlink($image_name);
        }
    }
    $sql = "delete from concert where num=$num";
    $result=mysql_query($sql);
   
}

mysql_close();

echo "<script>location.href='list.php';</script>";
?>