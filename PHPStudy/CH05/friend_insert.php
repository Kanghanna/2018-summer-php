<?php
//CH05_03

echo "<h4>friend ���̺� ���� �� �߰�</h4><hr>";

$conn = mysql_connect("localhost","���ѳ�","0324");
mysql_select_db("mirim",$conn);

$sql = "insert into friend values(2201,'������','����� ������', '010-8612-8952',
        '2017i01@e-mirim.hs.kr',18);";
$result = mysql_query($sql);

$sql = "insert into friend values(2202,'���ѳ�','����� ��������', '010-8361-3738',
        '2017i03@e-mirim.hs.kr',18);";
$result = mysql_query($sql);

$sql = "insert into friend values(2203,'�����','������ �籸��', '010-4536-3609',
        '2017i04@mirim.hs.kr',18);";
$result = mysql_query($sql);

$sql = "insert into friend values(2204,'�迹��','���ֵ�', '010-2204-2204',
        'yeahbin@mirim.hs.kr',18);";
$result = mysql_query($sql);

$sql = "insert into friend values(2205,'������','����� ������', '010-8283-9620'
        ,'2017i06@mirim.hs.kr',18);";
$result = mysql_query($sql);

if($result)
    echo "friend ���̺� ���� ����<p>";
else echo "friend ���̺� ���� ����<p>";
    




?>