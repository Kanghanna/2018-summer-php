<?php
//Ư�� �����Ϳ� ���� ���� ���
//�а��� �л����� 2���̻��̰� ����ÿ� �����ϴ� �л��鿡 ����
//�а��� �л���, �������, �ִ볪�̸� �ִ볪�̰� ���� �� ���� ���̽ÿ�.

echo "<h4>friend ���̺��� ������ �˻� - mysql_result()</h4><hr>";

$conn = mysql_connect("localhost","���ѳ�","0324");
$dbconn = mysql_select_db("mirim",$conn);

$sql = "select dept, count(*), avg(age), max(age)
        from friend
        where adress like '�����%'
        group by dept
        having count(*) >= 1
        order by max(age) desc, avg(age) desc";

$result = mysql_query($sql);

$rows = mysql_num_rows($result); //�˻��� �������� �� ����
$cols = mysql_num_fields($result);// �˻��� �������� �� ����

$att = array("�Ϸù�ȣ","�а�","�л���","�������","�ִ볪��");

echo "<table border = 0 cellpadding = 5><tr align = center>";

$number = 1;

foreach($att as $col)
    echo "<td bgcolor = #BCA9F5>$col</td>";  //�� �̸� ���
    
    for($i = 0; $i < $rows; $i++){
        echo "<tr align = center><td>$number</td>";
        
        for($j = 0; $j < $cols; $j++){
            $data = mysql_result($result,$i,$j);
            echo "<td>$data</td>";
        }
        echo "</tr>";
        $number++;
    }
    
    echo "</table>";
    
    mysql_close($conn);
    
    ?>