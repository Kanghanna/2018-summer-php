<?php
//Ư�� �����Ϳ� ���� ���� ���
echo "<h4>friend ���̺��� ������ �˻� - mysql_fetch_row()</h4><hr>";

$conn = mysql_connect("localhost","���ѳ�","0324");
$dbconn = mysql_select_db("mirim",$conn);

$sql = "select *
        from friend
        where age between 19 and 28
        order by age desc;";
$result = mysql_query($sql);

$rows = mysql_num_fields($result); //���� ���� ���

$cols = array("�Ϸù�ȣ","�й�","�̸�","�ּ�","��ȭ��ȣ","Email","����");

echo "<table border = 0 cellpadding = 5><tr align = center>";

$number = 1;

foreach($cols as $col)
    echo "<td bgcolor = #BCA9F5>$col</td>";  //�� �̸� ���
    
while($row = mysql_fetch_row($result)){
        echo "<tr><td>$number</td>";
        
        for($i = 0; $i < $rows; $i++)
            echo "<td>$row[$i]</td>";
        echo "</tr>";
        $number++;
}

echo "</table>";

mysql_close($conn);

?>