<?php
//특정 데이터에 대한 정렬 출력
echo "<h4>friend 테이블의 데이터 검색 - mysql_fetch_row()</h4><hr>";

$conn = mysql_connect("localhost","강한나","0324");
$dbconn = mysql_select_db("mirim",$conn);

$sql = "select *
        from friend
        where age between 19 and 28
        order by age desc;";
$result = mysql_query($sql);

$rows = mysql_num_fields($result); //행의 갯수 출력

$cols = array("일련번호","학번","이름","주소","전화번호","Email","나이");

echo "<table border = 0 cellpadding = 5><tr align = center>";

$number = 1;

foreach($cols as $col)
    echo "<td bgcolor = #BCA9F5>$col</td>";  //열 이름 출력
    
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