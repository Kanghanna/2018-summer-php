<?php

echo "<h4>���� ���� ���α׷� ���� - �����ͺ��̽� ���̺� ����</h4><hr>";

$conn = mysql_connect("localhost","���ѳ�","0324");
$dbconn = mysql_select_db("mirim",$conn);

$sql = "create table stud_score(
	    num int not null auto_increment,
	    name varchar(12),
	    sub1 int,
        sub2 int,
        sub3 int,
        sub4 int,
        sub5 int,
        sum int,
        avg float,
        primary key(num))";

$result = mysql_query($sql);

if($result)
    echo "stud_score ���̺� ���� ����<p>";
else echo "stud_score ���̺� ���� ����<p>";

mysql_close($conn);
?>