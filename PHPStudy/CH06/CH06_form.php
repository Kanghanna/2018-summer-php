<?php

echo "<h4>성적 관리 프로그램</h4><hr>";

echo "◈성적 입력◈<br><hr>";

$conn = mysql_connect("localhost","강한나","0324");
$dbconn = mysql_select_db("mirim",$conn);

echo "<form method='post' action='CH06_insert.php'>
       <table border = 1><tr>
        <td>이름 : <input type='text' name='name' size=8>&nbsp
                      과목1 : <input type='text' name='sub1' size=5>&nbsp
                      과목2 : <input type='text' name='sub2' size=5>&nbsp
                      과목3 : <input type='text' name='sub3' size=5>&nbsp
                      과목4 : <input type='text' name='sub4' size=5>&nbsp
                      과목5 : <input type='text' name='sub5' size=5>&nbsp
        </td>
        <td><input type='submit' name='submit' value='입력하기'></td>
        </table></form>";


$sql = "select * from stud_score
        order by sum desc";
$result = mysql_query($sql);

$cols = array("번호","이름","과목1","과목2","과목3","과목4","과목5",
            "합계","평균","비고");


echo "◈성적 입력◈<br><hr>";

echo "<table border = 0 cellpadding = 5><tr align = center>";

$cnt = 1;

foreach($cols as $col)
    echo "<td bgcolor = #BCA9F5>$col</td>";  //열 이름 출력

    // 방법1 - mysql_num_rows
    /*for($i = 0; $i < $rows; $i++){
        echo "<tr><td>$number</td>";
        
        for($j = 0; $j < $cols; $j++){
            $data = mysql_result($result,$i,$j);
            echo "<td>$data</td>";
        }
        echo "</tr>";
        $cnt++;
    } */
 //방법 3 mysql_fetch_array
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
            <td><a href = 'CH06_delete.php?num=$num'>[삭제]</a></td></tr>";
            $cnt++;
    }
    
    echo "</table>";
    
    mysql_close($conn);
    


?>