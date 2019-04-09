<title>Create Table</title>
<?
echo("<h4>concert 테이블 생성</h4><hr>");

include "../lib/dbconn.php";

$sql = "create table concert(
        num int not null auto_increment,
        id char(15) not null,
        name char(10) not null,
        nick char(10) not null,
        subject char(100) not null,
        content text not null,
        regist_day char(20),
        hit int,
        is_html char(1),
        file_name_0 char(40),
        file_name_1 char(40),
        file_name_2 char(40),
        file_copied_0 char(30),
        file_copied_1 char(30),
        file_copied_2 char(30),
        primary key(num) )";

mysql_query($sql);

?>
