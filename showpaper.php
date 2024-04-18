<html>
<head>
<meta charset="utf8">
<title>論文投稿網頁</title>
<h1><B>Author您好，您的投稿論文相關內容</h1></B>
</head>


<?php
session_start();

if($_SESSION["check"]=="Yes"){
    echo"<a href='logout.php'>登出</a>";
}

$sTitle=$_POST["sTitle"];
echo "論文標題：".$sTitle."<br/>";

$sName=$_POST["sName"];
echo "作者姓名：".$sName."<br/>";

$sEmail=$_POST["sEmail"];
echo "作者Email：".$sEmail."<br/>";


$sAbstract=$_POST["sAbstrac"];
echo "論文摘要：".$sAbstract."<br/>";

?>