<?php
//getdate()�Լ�

echo "���� �� �ð� �Լ�<hr>";

$today = getdate();

foreach($today as $key => $value)
    echo $key." ==> ".$value."<br>";

echo "<hr>";

// 2018�� 8�� 1�� Wednesday
// 9�� 21�� 50��
// 2018���� 00�� ���Ҿ��....������ �սô�~!

$day = 365 - $today['yday'];

echo "���� ��¥ : ".$today['year']."�� ".$today['mon']."�� ".
       $today['mday']."�� ".$today['weekday']."<br>";
echo "���� ��¥ : ".$today['hours']."�� ".$today['minutes']."�� ".
        $today['seconds']."��<br>";
echo $today['year']."���� ".$day."�� ���Ҿ��... ������ �սô�~!";

?>