<title>php first page</title>
<?
echo "eclipse���� �����ϴ� php source code<p>";
print("APMsetup ��ġ �Ϸ�<br>");

echo("A : Apache -> �� ����<p>");
echo("P : PHP5 -> �� ���α׷� ���<br>");
echo("M : Mysql -> DBMS");

print("<p>Mysql ���� Ȯ��");
$conn = Mysql_connect("localhost","root","apmsetup");
//�޷�ǥ��- ���� ������ ��
echo "<br>MySQL �۵� ����";
?>