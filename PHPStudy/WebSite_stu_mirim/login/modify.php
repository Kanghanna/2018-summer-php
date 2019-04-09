<?
session_start();

include "../lib/dbconn.php";

$userid = $_SESSION[userid];
$username = $_SESSION[username];
$usernick = $_SESSION[usernick];
$userlevel = $_SESSION[userlevel];

$pass = $_POST[pass];
$name = $_POST[name];
$nick = $_POST[nick];
$hp = $_POST[hp1]."-".$_POST[hp2]."-".$_POST[hp3];
$email = $_POST[email1]."@".$_POST[email2];

$regist_day = date("y-m-d(h:i:s)");

$sql = "update member
        set pass='$pass',
        name='$name',
        nick='$nick',
        hp='$hp',
        email='$email',
        regist_day='$regist_day',
        level='$level'
        where id='$userid'";
$result = mysql_query($sql);

$username = $name;
$usernick = $nick;

$_SESSION[username] = $username;
$_SESSION[usernick] = $usernick;

?>