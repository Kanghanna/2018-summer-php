<?php

$pFile = fopen("mirim.txt","r"); // r : 읽기

if($pFile)
    echo "파일 열기 성공<p>";
else
    echo "파일 열기 실패";

$data = fread($pFile, 15);

echo "실행결과 : $data";

echo "<p>fgets 함수 사용<br>";
while($line=fgets($pFile)){
    echo $line."<br>";
}

fclose($pFile);
?>