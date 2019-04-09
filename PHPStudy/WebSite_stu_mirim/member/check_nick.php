<? 
$nick = $_GET[nick];
if(!$nick){
    echo "닉네임을 입력하세요.";
}else {
    include "../lib/dbconn.php";
    
    $sql = "select id from member
            where nick='$nick'";
    
    $result = mysql_query($sql,$conn);
    $num_record = mysql_num_rows($result);
    
    if($num_record){
        echo "닉네임이 중복됩니다!<br>";
        echo "다른 닉네임을 사용하세요.<br>";
    }
    else {
        echo "사용가능한 닉네임입니다.";
    }
}
mysql_close($conn);

?>
