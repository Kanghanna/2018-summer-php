<?php

echo "<html>
<body>
       <h1>�� ȸ������ ��</h1><br>
<form name = 'second_form' method = 'post' action = 'form_p.php'>
    <table border = '1'>
        <tr>
            <td align = right>* ���̵� :</td>
            <td><input type = 'text' name = 'id'>
        </tr>
        <tr>
            <td align = right>* �̸� :</td>
            <td><input type = 'text' name = 'name'>
        </tr>
        <tr>
            <td align = right>* ��й�ȣ :</td>
            <td><input type = 'password' name = 'password'>
        </tr>
        <tr>
            <td align = right>* ��й�ȣ Ȯ�� :</td>
            <td><input type = 'password' name = 'pswdchk'>
        </tr>
        <tr>
            <td align = right>���� :</td>
            <td>
                <input type = 'radio' name = 'male' value = '����'>��</input>
                <input type = 'radio' name = 'female' value = '����'>��</input>
        </tr>
        <tr>
            <td align = right>�޴���ȭ :</td>
            <td><select name = 'num'>
                  <option value = '010'>010</option>
                  <option value = '011'>011</option>
                  <option value = '017'>017</option>
                </select>-
             <input type = 'text' name='num2' maxlength = '4'>-
             <input type = 'text' name='num3' maxlength = '4'>
            </td>
        </tr>
        <tr>
            <td align = right>�� �� :</td>
            <td><input type = 'text' name = 'adress' maxlength = '30'>
        </tr>
        <tr>
            <td align = right>�� �� :</td>
            <td><input type = 'checkbox' name = 'movie' value = 'yes'>��ȭ ����</input>
                <input type = 'checkbox' name = 'read' value = 'yes'>����</input>
                <input type = 'checkbox' name = 'shopping' value = 'yes'>����</input>
                <input type = 'checkbox' name = 'sport' value = 'yes'>�</input>
            </td>
        </tr>
        <tr>
            <td align = right>�ڱ�Ұ� :</td>
            <td><textarea name = 'introduce' rows = '5' cols = '40'></textarea>
        </tr>
</table>
<table align = center>
    <input type = 'submit' name = 'submit' value = 'Ȯ��'>
    <input type = 'reset' name = 'reset' value = '�ٽ��ۼ�'>
</table>
</form>
<body>
<html>"

?>