<?php
//CH05_01

echo "<h4>새로운 계정 등록</h4><hr>";
$conn = mysql_connect("localhost","root","apmsetup");
mysql_select_db("mysql",$conn);

echo "mysql DBMS와의 연동 성공<p>";

$sql = "create database mirim;";
$result = mysql_query($sql);

if($result)
    echo "1. 새로운 DB 생성 성공<p>";
else 
    echo "1. 새로운 DB 생성 실패...에러 확인<p>";

    
$sql = "insert into user(host, user, password)
values('localhost','강한나', password('0324') );";
$result = mysql_query($sql);

if($result)
    echo "2. user 테이블에 user, password 삽입 성공<p>";
else echo "2. user 테이블에 user, password 삽입 실패...에러<p>";


$sql = "insert into db
values('localhost','mirim','강한나','y','y','y','y','y','y','y',
'y','y','y','y','y','y','y','y','y','y','y','y');";
$result = mysql_query($sql);

if($result)
    echo "3. db 테이블에 사용권한 등록 성공<p>";
else echo "3. db 테이블에 사용권한 등록 실패...에러<p>";


$sql = "flush privileges;";
if($result)
    echo "4. user테이블과 db테이블에 변경 된 내용 적용 성공!<p>계정 생성이 끝났습니다.
            <br>생성된 계정으로 접속해보세요.";
else echo "4. user테이블과 db테이블에 변경 된 내용 적용 실패...<p>";


