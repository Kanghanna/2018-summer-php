<?php

echo "<h4>border ���̺� ����</h4>";
$mydb = mysql_connect("localhost","���ѳ�","0324")
or die("MySQL ���� ����");
if(!mysql_select_db("mirim",$mydb)) die("DB ���� �Ұ�");

/*
 $sql = "drop table board";
 $result = mysql_query($sql);
 */

//board ���̺� ����
//uid - ������, null �Է� �ȵ�, �ڵ� ����, �⺻Ű
// title - ���� ����(30), null �Է� �ȵ�
// content - ������Ÿ�� : text, null�Է� �ȵ�


 $sql = "create table board(
 uid int not null auto_increment,
 title varchar(30) not null,
 content text not null,
 primary key(uid))";//varchar = ������ ��
 $result = mysql_query($sql);
 if($result)
 echo "board ���̺� ���� �Ϸ�!!<br>";

 
 
echo "<h4>���̺� ������ ����</h4><hr>";
 $row = "insert into board(title,content)
        values($title, $content)";
 
 mysql_query($sql);
 
 mysql_close($sql);
 
 header("location:CH06_board.php");
 

  $row = mysql_num_rows($result);
  if($result)
  echo "������ ���� �Ϸ�!!<br>";
echo "<form method = 'post' action = 'CH06_board.php'>
<input type = 'submit' value = '�Խ������� ���ư���'></form>";
  
  ?>