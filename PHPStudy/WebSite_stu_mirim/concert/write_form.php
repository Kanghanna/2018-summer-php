<?
session_start();

$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
$usernick=$_SESSION['usernick'];
$userlevel=$_SESSION['userlevel'];

include '../lib/dbconn.php';

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta charset="euc-kr">
<link href="../css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/concert.css" rel="stylesheet" type="text/css" media="all">
<script>
  function check_input() {
      if (!document.board_form.subject.value){
          alert("������ �Է��ϼ���!");    
          document.board_form.subject.focus();
          return;
      }

      if (!document.board_form.content.value){
          alert("������ �Է��ϼ���!");    
          document.board_form.content.focus();
          return;
      }
      document.board_form.submit();
   }
</script>
</head>

<body>
<div id="wrap">
  <div id="header">
    <? include "../lib/top_login2.php"; ?>
  </div>  <!-- end of header -->
  <div id="menu">
	<? include "../lib/top_menu2.php"; ?>
  </div>  <!-- end of menu --> 
  <div id="content">
	<div id="col1">
		<div id="left_menu">
<?
   include "../lib/left_menu.php";
?>
		</div>
	</div> <!-- end of col1 -->

	<div id="col2">        
		<div id="title">
			<img src="../img/title_concert.gif">
		</div>
		<div class="clear"></div>
		<div id="write_form_title">
			<img src="../img/write_form_title.gif">
		</div>
		<div class="clear"></div>


		<form  name="board_form" method="post" action="insert.php" enctype="multipart/form-data"> 

		<div id="write_form">
			<div class="write_line"></div>
			<div id="write_row1"><div class="col1"> ���� </div><div class="col2"><?=$usernick?></div>

			<div class="col3"><input type="checkbox" name="html_ok" value="y"> HTML ����</div>
			</div>
			<div class="write_line"></div>
			<div id="write_row2"><div class="col1"> ����   </div>
			                     <div class="col2"><input type="text" name="subject" value="<?=$item_subject?>" ></div>
			</div>
			<div class="write_line"></div>
			<div id="write_row3"><div class="col1"> ����   </div>
			                     <div class="col2"><textarea rows="15" cols="79" name="content"><?=$item_content?></textarea></div>
			</div>
			<div class="write_line"></div>
			<div id="write_row4"><div class="col1"> �̹�������1   </div>
			                     <div class="col2"><input type="file" name="upfile[]"></div>
			</div>
			<div class="clear"></div>
<? 	if ($item_file_0){
?>
			<div class="delete_ok"><?=$item_file_0?> ������ ��ϵǾ� �ֽ��ϴ�. <input type="checkbox" name="del_file[]" value="0"> ����</div>
			<div class="clear"></div>
<?
	}
?>
			<div class="write_line"></div>
			<div id="write_row5"><div class="col1"> �̹�������2  </div>
			                     <div class="col2"><input type="file" name="upfile[]"></div>
			</div>
<? 	if ($item_file_1){
?>
			<div class="delete_ok"><?=$item_file_1?> ������ ��ϵǾ� �ֽ��ϴ�. <input type="checkbox" name="del_file[]" value="1"> ����</div>
			<div class="clear"></div>
<?
	}
?>
			<div class="write_line"></div>
			<div class="clear"></div>
			<div id="write_row6"><div class="col1"> �̹�������3   </div>
			                     <div class="col2"><input type="file" name="upfile[]"></div>
			</div>
<? 	if ($item_file_2){
?>
			<div class="delete_ok"><?=$item_file_2?> ������ ��ϵǾ� �ֽ��ϴ�. <input type="checkbox" name="del_file[]" value="2"> ����</div>
			<div class="clear"></div>
<?
	}
?>
			<div class="write_line"></div>
			<div class="clear"></div>
		</div>

		<div id="write_button"><a href="#"><img src="../img/ok.png" onclick="check_input()"></a>&nbsp;
								<a href="list.php?table=concert&page=<?=$page?>"><img src="../img/list.png"></a>
		</div>
		</form>
	</div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>
