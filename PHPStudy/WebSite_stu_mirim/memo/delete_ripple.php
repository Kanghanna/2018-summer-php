<?
session_start();

include "../lib/dbconn.php";

$num = $_GET[num];

$sql = "delete from memo_ripple where num=$num";
mysql_query($sql);

mysql_close();

echo "<script>location.href='memo.php';</script>";

?>

