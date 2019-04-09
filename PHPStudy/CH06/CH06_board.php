<html><head><title>미니 게시판 만들기</title></head>
<h3>미니게시판</h3><hr>
     <form method = 'post' action = 'CH06_boardlist.php'>
     <input type ='submit' value='글 목록 확인'></form>

      <form method = 'post' action = 'CH06_board_insert.php?title=$title&content=$content'>
      <table border = '0'>
      <tr><td colspan = '2'>
      <tr><td>제목&nbsp</td>
      <td><input type ='text' name='title' size = 100></td></tr>
      <tr><td valign = 'top'>내용&nbsp</td>
      <td><textarea name='content' rows='10' cols='100'>내용 입력</textarea></td></tr>
      <tr><td align = 'center' colspan = '2'><input type='submit' value='글 올리기'>
      <input type='reset' value = '취소'></td></tr>
      </table></form>
      
</html>