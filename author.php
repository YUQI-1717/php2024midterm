<html>
<head>
<meta charset="utf8">
<title>論文投稿網頁</title>
<h1><B>Author您好，歡迎進入論文投稿網頁</h1></B>
</head>

<form action="showpaper.php" method="post">

<br/>

論文標題：<br/>
<input type="title" name="sTitle" value=""><br/>

作者姓名：
<input type="text" name="sName" value="" placeholder="Please input your name" required><br/>

作者Email：
<input type="email" name="sEmail" value=""><br/>

論文摘要：
<textarea name="sAbstract" value="" rows="20" cols="50">
</textarea>

<br/>
<input type="submit" value="提交">

</form>

<?php
session_start();

if($_SESSION["check"]=="Yes"){
    echo"<a href='logout.php'>登出</a>";
}


?>