<?php
//select
echo "<h4>�̴ϰԽ��� ������ �˻�</h4><hr>";

$conn = mysql_connect("localhost","���ѳ�","0324");
$dbconn = mysql_select_db("mirim",$conn);

$sql = "select * from board";
$result = mysql_query($sql);

$rows = mysql_num_rows($result); //���� ����
$cols = mysql_num_fields($result); //���� ����

echo "�Խñ� �� ���� : ".$rows."<br>";

echo "<table><tr bgcolor = #BCA9F5>";

$arr = array("NUM","TITLE","CONTENT","ETC");

foreach($arr as $arrs)
    echo "<td>$arrs</td>";
echo "</tr>";

$cnt = 0;

//������ ��� - mysql_result()
/*
for($i=0; $i < $rows; $i++){
    $uid = mysql_result($result,$i,0);
    echo "<tr align = center><td>".++$cnt."</td>";
    for($j=1; $j < $cols; $j++){
        $data = mysql_result($result,$i,$j);
        echo "<td>$data</td>";
    }
    echo "<td><a href = 'CH06_board_delete.php?uid=$uid'>[����]</a></td></tr>";
}*/

//������ ��� - mysql_fetch_array()
/*
while($row = mysql_fetch_array($result)){
    $uid = $data[uid];
    echo"<tr align = center><td>".++$cnt."</td>
         <td>$row[title]</td>
         <td>$row[content]</td>
         <td><a href = 'CH06_board_delete.php?uid=$uid'>[����]</a></td></tr>";
}
*/

//������ ��� - mysql_fetch_row()
while($row = mysql_fetch_row($result)){
    $uid = $data[uid];
    echo "<tr><td>".++$cnt."</td>";
    for($j = 1; $j < $cols; $j++)
        echo "<td>$row[$j]</td>";
    echo "<td><a href = 'CH06_board_delete.php?uid=$uid'>[����]</a></td></tr>";
}

echo "</table>";

mysql_close($conn);

echo"<hr><form method = 'post' action = 'CH06_board.php'>
    <input type = 'submit' value = '�۾���� ���ư���'></form>";



?>