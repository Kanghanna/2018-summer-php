<?php

echo "<h4>성적 관리 프로그램 제작 - 데이터베이스 테이블 설계</h4><hr>";

$conn = mysql_connect("localhost","강한나","0324");
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
    echo "stud_score 테이블 생성 성공<p>";
else echo "stud_score 테이블 생성 실패<p>";

mysql_close($conn);
?>