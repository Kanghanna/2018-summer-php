<?php
/*
$source = "mirim.txt";
$dest = "mirim_copy.txt";

$result = copy($source, $dest);

if($result)
    echo "���� ���� ����";
else "���� ���� ����";
*/
$exist = file_exists("mirim_copy.txt");

if($exist)
    $result = unlink("mirim_copy.txt");
else {
    echo "���� ������<br>���� ������"; 
    die(); //������ ���� ����
}
    
if($result)
    echo "���� ���� ����";
?>