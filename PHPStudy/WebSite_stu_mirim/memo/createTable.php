<title>Create Table</title>
<?
echo("<h4>memo & memo_ripple 테이블 생성</h4><hr>");

include "../lib/dbconn.php";

$sql = "create table memo(
        num int not null auto_increment,
        id char(15) not null,
        name char(10) not null,
        nick char(10) not null,
        content text not null,
        regist_day char(20),
        primary key(num))";//memo 테이블 생성
$result = mysql_query($sql);



$sql = "create table memo_ripple(
        num int not null auto_increment,
        parent int not null,
        id char(15) not null,
        name char(10) not null,
        nick char(10) not null,
        content text not null,
        regist_day char(20),
        primary key(num))";//memo_ripple 테이블 생성
$result = mysql_query($sql);


?>
