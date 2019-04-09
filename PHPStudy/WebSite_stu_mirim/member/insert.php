<? 
//회원가입 db에 저장
include "../lib/dbconn.php";

$id = $_POST[id];
$pass = $_POST[pass];
$name = $_POST[name];
$nick = $_POST[nick];
$hp = $_POST[hp1]."-".$_POST[hp2]."-".$_POST[hp3];
$email = $_POST[email1]."@".$_POST[email2];
$regist_day = date('y-m-d(H:i:s)',time());
$level = 9;

$sql = "insert into member
        values('$id','$pass','$name','$nick','$hp','$email',
        '$regist_day',$level)";
mysql_query($sql,$conn);

mysql_close();

//index.php 페이지로 이동
echo "<script>location.href='../index.php'</script>";
?>
