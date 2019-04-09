<?
session_start();

$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
$usernick=$_SESSION['usernick'];
$userlevel=$_SESSION['userlevel'];


//subject, content, page 데이터 POST로 가져오기
$subject = $_POST[subject];
$content = $_POST[content];
$page = $_POST[page];

?>
<meta charset="euc-kr">
<?
if(!$userid) {
    echo("<script> window.alert('로그인 후 이용해 주세요.') history.go(-1) </script>");
    exit;
}

$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
// 다중 파일 업로드
$files = $_FILES["upfile"];
$count = count($files["name"]);

$upload_dir = './data/';

for ($i=0; $i<$count; $i++){
    $upfile_name[$i]     = $files["name"][$i];//2차원 배열
    $upfile_tmp_name[$i] = $files["tmp_name"][$i];
    $upfile_type[$i]     = $files["type"][$i];
    $upfile_size[$i]     = $files["size"][$i];
    $upfile_error[$i]    = $files["error"][$i];
          
    $file = explode(".", $upfile_name[$i]);
    $file_name = $file[0];
    $file_ext  = $file[1];
    
    if (!$upfile_error[$i]){
        $new_file_name = date("Y_m_d_H_i_s");
        $new_file_name = $new_file_name."_".$i;
        $copied_file_name[$i] = $new_file_name.".".$file_ext;
        $uploaded_file[$i] = $upload_dir.$copied_file_name[$i];
        
        if( $upfile_size[$i]  > 500000 ) {
            echo("<script>
                alert('업로드 파일 크기가 지정된 용량(500KB)을 초과합니다!<br>파일 크기를 체크해주세요! ');
                history.go(-1) </script>"); exit;
        }
        
        if ( ($upfile_type[$i] != "image/gif") &&($upfile_type[$i] != "image/jpeg") &&
            ($upfile_type[$i] != "image/pjpeg") ) {
                echo("<script> 
                    alert('JPG와 GIF 이미지 파일만 업로드 가능합니다!');
                    history.go(-1) </script>"); exit;
        }
            
        if (!move_uploaded_file($upfile_tmp_name[$i], $uploaded_file[$i]) ){
                echo("<script>
                    alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
                    history.go(-1)</script>");
                exit;
        }
    }
} //for_end

include "../lib/dbconn.php";


//concert 테이블에 데이터 삽입
$sql = "insert into concert(id,name,nick,subject,content,
        regist_day,hit,is_html,file_name_0,file_name_1,
        file_name_2,file_copied_0,file_copied_1,file_copied_2)
        values('$userid','$username','$usernick','$subject',
        '$content','$regist_day',0,'$is_html','$upfile_name[0]',
        '$upfile_name[1]','$upfile_name[2]','$copied_file_name[0]',
        '$copied_file_name[1]','$copied_file_name[2]')";

mysql_query($sql, $conn);

mysql_close();


echo "<script> 
        location.href='list.php?page=$page';  
    </script>";

?>
            
