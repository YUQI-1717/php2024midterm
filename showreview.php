<html>
<head>
<meta charset="utf8">
<title>論文評論網頁</title>
<h1><B>Reviewer您好</h1></B>
</head>


<?php
session_start();

if($_SESSION["check"]=="Yes"){
    echo"<a href='logout.php'>登出</a>";
}

$sComment=$_POST["sComment"];
echo "您的評論：".$sComment."<br/>";

?>