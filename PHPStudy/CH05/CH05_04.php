<?php

echo "<h4>friend ���̺��� ������ �˻� - mysql_fetch_array()</h4><hr>";

$conn = mysql_connect("localhost","���ѳ�","0324");
$dbconn = mysql_select_db("mirim",$conn);

$sql = "select * from friend;";
//mysql_query("select * from friend;")

$result = mysql_query($sql, $conn); //$conn(�ĺ��ڹ�ȣ)�� �����ϴ� ������ �ϳ��� ���� ���� �Ƚᵵ ��

$cols = array("�Ϸù�ȣ","�й�","�̸�","�ּ�","��ȭ��ȣ","Email","����");

echo "<table border = 0 cellpadding = 5><tr align = center>";

foreach($cols as $col)
    echo "<td bgcolor = #BCA9F5>$col</td>";
echo "</tr>";

$number = 1;

while($row = mysql_fetch_array($result)){ //mysql_fetch_array($result) : result�� �ִ� ���� row�� ������
    echo"<tr align = center><td>$number</td>
         <td>$row[num]</td>
         <td>$row[name]</td>
         <td>$row[adress]</td>
         <td>$row[tel]</td>
         <td>$row[email]</td>
         <td>$row[age]</td></tr>";
    $number++;
}

echo "</table>";

mysql_close();