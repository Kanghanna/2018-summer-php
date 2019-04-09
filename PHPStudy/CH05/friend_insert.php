<?php
//CH05_03

echo "<h4>friend 테이블 생성 및 추가</h4><hr>";

$conn = mysql_connect("localhost","강한나","0324");
mysql_select_db("mirim",$conn);

$sql = "insert into friend values(2201,'강남희','서울시 강서구', '010-8612-8952',
        '2017i01@e-mirim.hs.kr',18);";
$result = mysql_query($sql);

$sql = "insert into friend values(2202,'강한나','서울시 영등포구', '010-8361-3738',
        '2017i03@e-mirim.hs.kr',18);";
$result = mysql_query($sql);

$sql = "insert into friend values(2203,'김수민','강원도 양구군', '010-4536-3609',
        '2017i04@mirim.hs.kr',18);";
$result = mysql_query($sql);

$sql = "insert into friend values(2204,'김예빈','제주도', '010-2204-2204',
        'yeahbin@mirim.hs.kr',18);";
$result = mysql_query($sql);

$sql = "insert into friend values(2205,'김윤지','서울시 강서구', '010-8283-9620'
        ,'2017i06@mirim.hs.kr',18);";
$result = mysql_query($sql);

if($result)
    echo "friend 테이블 생성 성공<p>";
else echo "friend 테이블 생성 실패<p>";
    




?>