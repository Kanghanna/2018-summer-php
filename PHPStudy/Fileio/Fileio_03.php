<?php
/*
$source = "mirim.txt";
$dest = "mirim_copy.txt";

$result = copy($source, $dest);

if($result)
    echo "파일 복사 성공";
else "파일 복사 실패";
*/
$exist = file_exists("mirim_copy.txt");

if($exist)
    $result = unlink("mirim_copy.txt");
else {
    echo "파일 미존재<br>강제 종료함"; 
    die(); //연결을 끊고 나옴
}
    
if($result)
    echo "파일 삭제 성공";
?>