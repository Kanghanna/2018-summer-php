<?php

echo "<table border = '1'><tr><td>�ﰢ�� * ���1<br><hr/>";

for($i = 0; $i < 10; $i++){ //*�� ����
       for($j = 9; $j >= $i; $j--){ //������ ����
            echo "&nbsp&nbsp";
        }
        for($k = 0; $k <= $i; $k++){
            echo "*&nbsp";
        }
        echo "<br>";
}

echo "</td><td>�ﰢ�� * ���2<br><hr/>";
for($i = 0; $i < 10; $i++){//�ٹٲ�
    for($j = $i+1; $j > 0; $j--){//���ٿ� ���� ��
        echo "*&nbsp";
    }
    echo "<br>";
}
echo "</tr><tr><td>�ﰢ�� * ���3<br><hr/>";
for($i = 0; $i < 10; $i++){ //���� �ݺ� ����
    for($k = 0; $k <= $i; $k++){
        echo "&nbsp&nbsp";
    }
    for($j = 9; $j >= $i; $j--){
        echo "*&nbsp";
    }
    echo "<br>";
}

echo "</td><td>�ﰢ�� * ���4<br><hr/>";
for($i = 10; $i > 0; $i--){ //*�� ����
    for($j = 10 - $i; $j < 10; $j++){ //������ ����
        echo "*&nbsp";
    }
    echo "<br>";
}
echo "</td></tr></table>";
?>