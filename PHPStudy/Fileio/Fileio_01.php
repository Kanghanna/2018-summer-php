<?php

$pFile = fopen("mirim.txt","w"); // a : �а� ����

$data = "Hi~~~Welcome to the PHP World!!!";

fwrite($pFile, $data); //����
fclose($pFile);

?>