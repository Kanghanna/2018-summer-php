<?
session_start();

include "../lib/dbconn.php";

$userid = $_SESSION[userid];
$username = $_SESSION[username];
$usernick = $_SESSION[usernick];
$content = $_POST[content];
$regist_day = date("y-m-d(h:i:s)");

if(!$userid){
    echo "<script>
          window.alert('�α��� �� �Է��ϼ���.');
          history.go(-1);
          </script>";
}
else if(!$content){
    echo "<script>
          window.alert('������ �Է��ϼ���.');
          history.go(-1);
          </script>";
}
else {
    $sql = "insert into memo(id,name,nick,content,regist_day)
      values('$userid','$username','$usernick','$content',
        '$regist_day')";
}

mysql_query($sql);

mysql_close();

echo "<script>location.href='memo.php'</script>";
?>