<html>
<head>
<meta http-equiv = "Content-Type" content = "text/html;charset=euc-kr"/>
<title>5������ �հ�/���</title>
<style>
tr { colspan : 2; }
th,td { width : 200;
text-align : center;
font-weight : bold; }
</style>
</head>

<body>
<?php

$subject = array("����","����","����","��ȸ","����");
$score = array(87,83,97,75,96);
/*
$score[0] = 87;
$score[1] = 83;
$score[2] = 97;
$score[3] = 75;
$score[4] = 96;
*/

echo "<h4><���ѳ��� ����></h4><hr/>";

for($i = 0; $i < 5; $i++){
$sum += $score[$i];

$avg = $sum / 5;

echo "
<table border = '1'>
<tr><th>$subject[$i]</th><td>$score[$i]</td></tr>
";
}

echo "
<tr><th>�հ�</th><td>$sum</td></tr>
<tr><th>���</th><td>$avg</td></tr></table>";
?>
</body>
</html>