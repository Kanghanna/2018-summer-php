<?php
echo "<h4>���� ���� ���α׷�</h4><hr>";

echo "�¼��� �Է¢�<br><hr>";

$conn = mysql_connect("localhost","���ѳ�","0324");
$dbconn = mysql_select_db("mirim",$conn);

$name = $_POST['name'];
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];
$sub5 = $_POST['sub5'];
$sum = $_POST['sum'];
$avg = $_POST['avg'];

$sum = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
$avg = $sum / 5;
        
$sql = "insert into stud_score
    (name, sub1, sub2, sub3, sub4, sub5, sum, avg)
    values('$name', $sub1, $sub2, $sub3, $sub4, $sub5, $sum, $avg)";
   
$result = mysql_query($sql,$conn);

if($result)
    echo $name."�� ������ �ԷµǾ����ϴ�.";
else echo $name."�� ������ �Էµ��� �ʾҽ��ϴ�.";

echo "<form method = 'post' action = 'CH06_form.php'>
    <input type = 'submit' value = '�ٽ� ���ư���'>
    </form>";

mysql_close($conn);
?>