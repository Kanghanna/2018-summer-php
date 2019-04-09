<?php
//특정 데이터에 대한 정렬 출력
echo "<h4>friend 테이블의 데이터 검색 - mysql_result()</h4><hr>";

$conn = mysql_connect("localhost","강한나","0324");
$dbconn = mysql_select_db("mirim",$conn);

$sql = "select * from friend";

$result = mysql_query($sql);

$rows = mysql_num_rows($result); //검색된 데이터의 행 개수
$cols = mysql_num_fields($result);// 검색된 데이터의 열 개수

$att = array("일련번호","학번","이름","주소","전화번호","Email","나이","학과");

echo "<table border = 0 cellpadding = 5><tr align = center>";

$number = 1;

foreach($att as $col)
    echo "<td bgcolor = #BCA9F5>$col</td>";  //열 이름 출력
    
    for($i = 0; $i < $rows; $i++){
        echo "<tr><td>$number</td>";
        
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