<?php

echo "<h4>friend 테이블의 데이터 검색 - mysql_fetch_array()</h4><hr>";

$conn = mysql_connect("localhost","강한나","0324");
$dbconn = mysql_select_db("mirim",$conn);

$sql = "select * from friend;";
//mysql_query("select * from friend;")

$result = mysql_query($sql, $conn); //$conn(식별자번호)는 접근하는 계정이 하나일 때는 굳이 안써도 됨

$cols = array("일련번호","학번","이름","주소","전화번호","Email","나이");

echo "<table border = 0 cellpadding = 5><tr align = center>";

foreach($cols as $col)
    echo "<td bgcolor = #BCA9F5>$col</td>";
echo "</tr>";

$number = 1;

while($row = mysql_fetch_array($result)){ //mysql_fetch_array($result) : result에 있는 값을 row로 가져옴
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