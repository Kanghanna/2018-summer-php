<html>
<head>
<meta http-equiv = "Content-Type" content = "text/html;charset=euc-kr"/>
<title>5������ �հ�/���</title>
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
<tr><td>���� : $kor</td></tr>
<tr><td>���� : $eng</td></tr>
<tr><td>���� : $math</td></tr>
<tr><td>��ȸ : $soc</td></tr>
<tr><td>���� : $sci</td></tr>
<tr><td>�հ� : $sum</td></tr>
<tr><td>��� : $avg</td></tr>
</table>
";
?>
</body>
</html>