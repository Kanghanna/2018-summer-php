<?php

echo "<h4>border 테이블 생성</h4>";
$mydb = mysql_connect("localhost","강한나","0324")
or die("MySQL 접속 실패");
if(!mysql_select_db("mirim",$mydb)) die("DB 선택 불가");

/*
 $sql = "drop table board";
 $result = mysql_query($sql);
 */

//board 테이블 생성
//uid - 정수형, null 입력 안됨, 자동 증가, 기본키
// title - 가변 길이(30), null 입력 안됨
// content - 데이터타입 : text, null입력 안됨


 $sql = "create table board(
 uid int not null auto_increment,
 title varchar(30) not null,
 content text not null,
 primary key(uid))";//varchar = 동적인 형
 $result = mysql_query($sql);
 if($result)
 echo "board 테이블 생성 완료!!<br>";

 
 
echo "<h4>테이블에 데이터 삽입</h4><hr>";
 $row = "insert into board(title,content)
        values($title, $content)";
 
 mysql_query($sql);
 
 mysql_close($sql);
 
 header("location:CH06_board.php");
 

  $row = mysql_num_rows($result);
  if($result)
  echo "데이터 삽입 완료!!<br>";
echo "<form method = 'post' action = 'CH06_board.php'>
<input type = 'submit' value = '게시판으로 돌아가기'></form>";
  
  ?>