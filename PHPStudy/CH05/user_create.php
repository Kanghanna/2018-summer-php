<?php
//CH05_01

echo "<h4>���ο� ���� ���</h4><hr>";
$conn = mysql_connect("localhost","root","apmsetup");
mysql_select_db("mysql",$conn);

echo "mysql DBMS���� ���� ����<p>";

$sql = "create database mirim;";
$result = mysql_query($sql);

if($result)
    echo "1. ���ο� DB ���� ����<p>";
else 
    echo "1. ���ο� DB ���� ����...���� Ȯ��<p>";

    
$sql = "insert into user(host, user, password)
values('localhost','���ѳ�', password('0324') );";
$result = mysql_query($sql);

if($result)
    echo "2. user ���̺� user, password ���� ����<p>";
else echo "2. user ���̺� user, password ���� ����...����<p>";


$sql = "insert into db
values('localhost','mirim','���ѳ�','y','y','y','y','y','y','y',
'y','y','y','y','y','y','y','y','y','y','y','y');";
$result = mysql_query($sql);

if($result)
    echo "3. db ���̺� ������ ��� ����<p>";
else echo "3. db ���̺� ������ ��� ����...����<p>";


$sql = "flush privileges;";
if($result)
    echo "4. user���̺�� db���̺� ���� �� ���� ���� ����!<p>���� ������ �������ϴ�.
            <br>������ �������� �����غ�����.";
else echo "4. user���̺�� db���̺� ���� �� ���� ���� ����...<p>";


