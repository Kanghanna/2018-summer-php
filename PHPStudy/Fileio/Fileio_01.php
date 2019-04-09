<?php

$pFile = fopen("mirim.txt","w"); // a : 읽고 쓰기

$data = "Hi~~~Welcome to the PHP World!!!";

fwrite($pFile, $data); //파일
fclose($pFile);

?>