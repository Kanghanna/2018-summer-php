<?php

$conn = mysql_connect("localhost","���ѳ�","0324");
$dbconn = mysql_select_db("mirim",$conn);

$sql = "delete from stud_score
      where uid=$uid";
mysql_query($sql);

mysql_close($conn);

header("location:CH06_board.php");

?>