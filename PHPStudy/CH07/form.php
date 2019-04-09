<?php

echo "<html>
<body>
       <h1>♣ 회원가입 ♣</h1><br>
<form name = 'second_form' method = 'post' action = 'form_p.php'>
    <table border = '1'>
        <tr>
            <td align = right>* 아이디 :</td>
            <td><input type = 'text' name = 'id'>
        </tr>
        <tr>
            <td align = right>* 이름 :</td>
            <td><input type = 'text' name = 'name'>
        </tr>
        <tr>
            <td align = right>* 비밀번호 :</td>
            <td><input type = 'password' name = 'password'>
        </tr>
        <tr>
            <td align = right>* 비밀번호 확인 :</td>
            <td><input type = 'password' name = 'pswdchk'>
        </tr>
        <tr>
            <td align = right>성별 :</td>
            <td>
                <input type = 'radio' name = 'male' value = '남자'>남</input>
                <input type = 'radio' name = 'female' value = '여자'>여</input>
        </tr>
        <tr>
            <td align = right>휴대전화 :</td>
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
            <td align = right>주 소 :</td>
            <td><input type = 'text' name = 'adress' maxlength = '30'>
        </tr>
        <tr>
            <td align = right>취 미 :</td>
            <td><input type = 'checkbox' name = 'movie' value = 'yes'>영화 감상</input>
                <input type = 'checkbox' name = 'read' value = 'yes'>독서</input>
                <input type = 'checkbox' name = 'shopping' value = 'yes'>쇼핑</input>
                <input type = 'checkbox' name = 'sport' value = 'yes'>운동</input>
            </td>
        </tr>
        <tr>
            <td align = right>자기소개 :</td>
            <td><textarea name = 'introduce' rows = '5' cols = '40'></textarea>
        </tr>
</table>
<table align = center>
    <input type = 'submit' name = 'submit' value = '확인'>
    <input type = 'reset' name = 'reset' value = '다시작성'>
</table>
</form>
<body>
<html>"

?>