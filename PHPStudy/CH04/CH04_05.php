<?php

echo "<h4>array() �Լ� �̿� - ���� ���</h4><hr/>";
$week = array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");

foreach($week as $day)
    echo "$day&nbsp";

echo "<p><h4>���� - sort() �Լ��� �̿��� ���� ����</h4><hr/>";

sort($week); //���ĺ� ������ �ڵ� ����

foreach($week as $day)
    echo "$day&nbsp";

    
echo "<p><h4>���� - sort() �Լ��� �̿��� ���� ����</h4><hr/>";
    
$fruits = array("watermelon","orange","strawbarry","banana",
            "apple","Mango","Peach");

sort($fruits);

foreach($fruits as $fruits)
    echo "$fruits&nbsp";

    

    