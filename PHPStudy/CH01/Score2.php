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
    $kor = 87;
    $eng = 83;
    $math = 97;
    $soc = 75;
    $sci = 96;
    
    $sum = $kor + $eng + $math + $soc + $sci;
    $avg = $sum / 5;
    echo "
<table border = '1'>
<tr><th>����</th><td>$kor</td></tr>
<tr><th>����</th><td>$eng</td></tr>
<tr><th>����</th><td>$math</td></tr>
<tr><th>��ȸ</th><td>$soc</td></tr>
<tr><th>����</th><td>$sci</td></tr>
<tr><th>�հ�</th><td>$sum</td></tr>
<tr><th>���</th><td>$avg</td></tr>
</table>
";
?>
</body>
</html>