<title>Create Table</title>
<?
echo("<h4>member 테이블 생성</h4><hr>");

include "../lib/dbconn.php";

/*
$sql = "drop table member";
$result = mysql_query($sql);
if($result)
    echo "성공<p>";
    else echo "실패";
*/

$sql = "create table member(
        id char(15) not null,
        pass char(15) not null,
        name char(10) not null,
        nick char(10) not null,
        hp char(20) not null,
        email char(80),
        regist_day char(20),
        level int,
        primary key(id))";

$result = mysql_query($sql);

if($result)
    echo "성공";
else echo "실패";

?>
