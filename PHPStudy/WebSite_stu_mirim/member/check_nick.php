<? 
$nick = $_GET[nick];
if(!$nick){
    echo "�г����� �Է��ϼ���.";
}else {
    include "../lib/dbconn.php";
    
    $sql = "select id from member
            where nick='$nick'";
    
    $result = mysql_query($sql,$conn);
    $num_record = mysql_num_rows($result);
    
    if($num_record){
        echo "�г����� �ߺ��˴ϴ�!<br>";
        echo "�ٸ� �г����� ����ϼ���.<br>";
    }
    else {
        echo "��밡���� �г����Դϴ�.";
    }
}
mysql_close($conn);

?>
