<?

session_start();

include "../lib/dbconn.php";

$num = $_POST[num];
$userid = $_SESSION[userid];
$username = $_SESSION[username];
$usernick = $_SESSION[usernick];
$ripple_content = $_POST[ripple_content];
$regist_day = date("y-m-d(h:i:s)");

if(!$userid){
    echo "<script>
          window.alert('�α��� �� �Է��ϼ���.');
          history.go(-1);
          </script>";
}
else if(!$ripple_content){
    echo "<script>
          window.alert('������ �Է��ϼ���.');
          history.go(-1);
          </script>";
}
else {
$sql = "insert into memo_ripple(parent,id,name,nick,content,regist_day)
        values($num,'$userid','$username','$usernick','$ripple_content',
        '$regist_day')";

}
mysql_query($sql);

mysql_close();

echo "<script>location.href='memo.php'</script>";
?>
