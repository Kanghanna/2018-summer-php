<?php

echo "<h4>���� ���� ���α׷�</h4><hr>";

echo "�¼��� �Է¢�<br><hr>";

$conn = mysql_connect("localhost","���ѳ�","0324");
$dbconn = mysql_select_db("mirim",$conn);

echo "<form method='post' action='CH06_insert.php'>
       <table border = 1><tr>
        <td>�̸� : <input type='text' name='name' size=8>&nbsp
                      ����1 : <input type='text' name='sub1' size=5>&nbsp
                      ����2 : <input type='text' name='sub2' size=5>&nbsp
                      ����3 : <input type='text' name='sub3' size=5>&nbsp
                      ����4 : <input type='text' name='sub4' size=5>&nbsp
                      ����5 : <input type='text' name='sub5' size=5>&nbsp
        </td>
        <td><input type='submit' name='submit' value='�Է��ϱ�'></td>
        </table></form>";


$sql = "select * from stud_score
        order by sum desc";
$result = mysql_query($sql);

$cols = array("��ȣ","�̸�","����1","����2","����3","����4","����5",
            "�հ�","���","���");


echo "�¼��� �Է¢�<br><hr>";

echo "<table border = 0 cellpadding = 5><tr align = center>";

$cnt = 1;

foreach($cols as $col)
    echo "<td bgcolor = #BCA9F5>$col</td>";  //�� �̸� ���

    // ���1 - mysql_num_rows
    /*for($i = 0; $i < $rows; $i++){
        echo "<tr><td>$number</td>";
        
        for($j = 0; $j < $cols; $j++){
            $data = mysql_result($result,$i,$j);
            echo "<td>$data</td>";
        }
        echo "</tr>";
        $cnt++;
    } */
 //��� 3 mysql_fetch_array
    while($row = mysql_fetch_array($result)){
            $num = $row[num];
            echo "<tr align='center'><td>$cnt</td>";
            echo "<td>$row[name]</td>";
            echo "<td>$row[sub1]</td>";
            echo "<td>$row[sub2]</td>";
            echo "<td>$row[sub3]</td>";
            echo "<td>$row[sub4]</td>";
            echo "<td>$row[sub5]</td>";
            echo "<td>$row[sum]</td>";
            echo "<td>$row[avg]</td>
            <td><a href = 'CH06_delete.php?num=$num'>[����]</a></td></tr>";
            $cnt++;
    }
    
    echo "</table>";
    
    mysql_close($conn);
    


?>