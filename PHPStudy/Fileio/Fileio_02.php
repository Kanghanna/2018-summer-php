<?php

$pFile = fopen("mirim.txt","r"); // r : �б�

if($pFile)
    echo "���� ���� ����<p>";
else
    echo "���� ���� ����";

$data = fread($pFile, 15);

echo "������ : $data";

echo "<p>fgets �Լ� ���<br>";
while($line=fgets($pFile)){
    echo $line."<br>";
}

fclose($pFile);
?>