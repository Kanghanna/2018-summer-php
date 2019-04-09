<title>php first page</title>
<?
echo "eclipse에서 편집하는 php source code<p>";
print("APMsetup 설치 완료<br>");

echo("A : Apache -> 웹 서버<p>");
echo("P : PHP5 -> 웹 프로그램 언어<br>");
echo("M : Mysql -> DBMS");

print("<p>Mysql 연동 확인");
$conn = Mysql_connect("localhost","root","apmsetup");
//달러표시- 변수 선언할 때
echo "<br>MySQL 작동 성공";
?>