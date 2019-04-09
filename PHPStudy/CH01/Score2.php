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
    $kor = 87;
    $eng = 83;
    $math = 97;
    $soc = 75;
    $sci = 96;
    
    $sum = $kor + $eng + $math + $soc + $sci;
    $avg = $sum / 5;
    echo "
<table border = '1'>
<tr><th>국어</th><td>$kor</td></tr>
<tr><th>영어</th><td>$eng</td></tr>
<tr><th>수학</th><td>$math</td></tr>
<tr><th>사회</th><td>$soc</td></tr>
<tr><th>과학</th><td>$sci</td></tr>
<tr><th>합계</th><td>$sum</td></tr>
<tr><th>평균</th><td>$avg</td></tr>
</table>
";
?>
</body>
</html>