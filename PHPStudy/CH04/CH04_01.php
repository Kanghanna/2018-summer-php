<html>
<head>
<meta http-equiv = "Content-Type" content = "text/html;charset=euc-kr"/>
<title>5과목의 합계/평균</title>
<style>
tr { colspan : 2; }
th,td { width : 200;
text-align : center;
font-weight : bold; }
</style>
</head>

<body>
<?php

$subject = array("국어","영어","수학","사회","과학");
$score = array(87,83,97,75,96);
/*
$score[0] = 87;
$score[1] = 83;
$score[2] = 97;
$score[3] = 75;
$score[4] = 96;
*/

echo "<h4><강한나의 성적></h4><hr/>";

for($i = 0; $i < 5; $i++){
$sum += $score[$i];

$avg = $sum / 5;

echo "
<table border = '1'>
<tr><th>$subject[$i]</th><td>$score[$i]</td></tr>
";
}

echo "
<tr><th>합계</th><td>$sum</td></tr>
<tr><th>평균</th><td>$avg</td></tr></table>";
?>
</body>
</html>