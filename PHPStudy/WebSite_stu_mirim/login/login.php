<? 

session_start();

$id = $_POST[id];
$pass = $_POST[pass];

if(!$id){
    echo "<script>
          window.alert('���̵� �Է��ϼ���.');
          history.go(-1);
          </script>";
    exit;
}

if(!$pass){
    echo "<script>
          window.alert('��й�ȣ�� �Է��ϼ���.');
          history.go(-1);
          </script>";
    exit;
}

include "../lib/dbconn.php";

$sql = "select * from member where id = '$id'";
$result = mysql_query($sql,$conn);

$record = mysql_num_rows($result); //���� �� �ִ� 1��

if(!$record){
    echo "<script>
          window.alert('��ϵ��� ���� ���̵��Դϴ�.');
          history.go(-1);
          </script>";
    exit;
} else{
    $row = mysql_fetch_array($result);
    $dbpass = $row[pass];
    
    if($pass != $dbpass){
        echo "<script>
          window.alert('��й�ȣ�� Ʋ�Ƚ��ϴ�. �ٽ� �Է��ϼ���.');
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
