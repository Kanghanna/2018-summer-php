<?php

$conn = mysql_connect("localhost","ฐญวัณช","0324");
$dbconn = mysql_select_db("mirim",$conn);

$sql = "delete from stud_score
      where num".$_GET['num'];
$result = mysql_query($sql);

mysql_close($conn);

header("location:CH06_form.php");
?>