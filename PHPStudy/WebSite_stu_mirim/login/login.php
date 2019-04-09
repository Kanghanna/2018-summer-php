<? 

session_start();

$id = $_POST[id];
$pass = $_POST[pass];

if(!$id){
    echo "<script>
          window.alert('아이디를 입력하세요.');
          history.go(-1);
          </script>";
    exit;
}

if(!$pass){
    echo "<script>
          window.alert('비밀번호를 입력하세요.');
          history.go(-1);
          </script>";
    exit;
}

include "../lib/dbconn.php";

$sql = "select * from member where id = '$id'";
$result = mysql_query($sql,$conn);

$record = mysql_num_rows($result); //행의 수 최대 1개

if(!$record){
    echo "<script>
          window.alert('등록되지 않은 아이디입니다.');
          history.go(-1);
          </script>";
    exit;
} else{
    $row = mysql_fetch_array($result);
    $dbpass = $row[pass];
    
    if($pass != $dbpass){
        echo "<script>
          window.alert('비밀번호가 틀렸습니다. 다시 입력하세요.');
          history.go(-1);
          </script>";
        exit;
    }else{
        $userid = $row[id];
        $username = $row[name];
        $usernick = $row[nick];
        $userlevel = $row[level];
        
        $_SESSION[userid] = $userid;
        $_SESSION[username] = $username;
        $_SESSION[usernick] = $usernick;
        $_SESSION[userlevel] = $userlevel;
        echo "<script>location.href='../index.php';</script>";
    } 
}


?>
