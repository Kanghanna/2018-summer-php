<?php
//CH05_02

echo "<h4>friend ���̺� ����</h4><hr>";

$conn = mysql_connect("localhost","���ѳ�","0324");
mysql_select_db("mirim",$conn);

$sql = "create table friend(
        num int not null,
        name char(10),
        adress char(80),
        tel char(20),
        email char(20),
        primary key(num));";

$result = mysql_query($sql);

if($result)
    echo "friend ���̺� ���� ����<p>";
else echo "friend ���̺� ���� ����<p>";

//$sql = "alter table friend add age int";
?>