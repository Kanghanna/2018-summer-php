<?php
//counter

$fname = "counter.txt";

if(!file_exists($fname)){ //fname의 파일이 존재하지 않을 때
    touch($fname); //파일 접근이 가능하게 만듬, 수정 시간 설정
    $pFile = fopen($fname, "r+");
    $data = "<?$cnt=0?>";
}
else{
    include "counter.txt"; //파일을 가져와서 실행할 수 있게 해줌
    $cnt++;
    $data = "<?\$cnt=".$cnt."?>"; //cnt의 변화된 값을 sdata에 넣음
    $pFile = fopen($fname,"r+");
}

fwrite($pFile, $data);
fclose($pFile);

echo "웹 페이지 접속 횟수 : ".$cnt;

?>