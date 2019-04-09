<?php

echo "아이디 : ".$_POST[id]."<br>";
echo "이름 : ".$_POST[name]."<br>";

echo "비밀번호 : ".$_POST[password]."<br>";
echo "비밀번호 확인 :<br>";

if($_POST[male] == "male"){
    echo "성별 : ".$_POST[male]."<br>";
}else echo "성별 : ".$_POST[female]."<br>";

echo "휴대전화 : ".$_POST[num]."-".$_POST[num2].
      "-".$_POST[num3]."<br>";

echo "주소 : ".$_POST[adress]."<br>";

echo "취미 : ";

if($_POST[movie] == "yes")
    echo "영화 감상&nbsp";
if($_POST[read] == "yes")
    echo "독서 &nbsp";
if($_POST[shopping] == "yes")
        echo "쇼핑&nbsp";
if($_POST[sport] == "yes")
        echo "운동&nbsp";
echo "<br>자기소개 : ".$_POST[introduce]."<br>";


