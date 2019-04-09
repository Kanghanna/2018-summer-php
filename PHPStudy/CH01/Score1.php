<html>
<head>
<meta http-equiv = "Content-Type" content = "text/html;charset=euc-kr"/>
<title>5과목의 합계/평균</title>
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
<tr><td>국어 : $kor</td></tr>
<tr><td>영어 : $eng</td></tr>
<tr><td>수학 : $math</td></tr>
<tr><td>사회 : $soc</td></tr>
<tr><td>과학 : $sci</td></tr>
<tr><td>합계 : $sum</td></tr>
<tr><td>평균 : $avg</td></tr>
</table>
";
?>
</body>
</html>