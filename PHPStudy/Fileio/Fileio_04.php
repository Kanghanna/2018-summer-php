<?php
//counter

$fname = "counter.txt";

if(!file_exists($fname)){ //fname�� ������ �������� ���� ��
    touch($fname); //���� ������ �����ϰ� ����, ���� �ð� ����
    $pFile = fopen($fname, "r+");
    $data = "<?$cnt=0?>";
}
else{
    include "counter.txt"; //������ �����ͼ� ������ �� �ְ� ����
    $cnt++;
    $data = "<?\$cnt=".$cnt."?>"; //cnt�� ��ȭ�� ���� sdata�� ����
    $pFile = fopen($fname,"r+");
}

fwrite($pFile, $data);
fclose($pFile);

echo "�� ������ ���� Ƚ�� : ".$cnt;

?>