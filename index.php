<html>
<head>
<meta charset="utf8">
<title>高大資管論文投稿系統</title>
</head>

<h1><B>高大資管論文投稿系統</B></h1>

<form action="check.php" method="get">

請選擇您的角色：
<select name="role" >
<option value="Chair" selected>Chair
<option value="Reviewer">Reviewer
<option value="Author">Author
</select><br/>


帳號：<input type="text" name="uID"><br/>
密碼：<input type="password" name="uPwd"><br/>
<input type="submit">

</form>

<?php

if(isset($_COOKIE["userName"])){
    echo $_COOKIE["userName"]."歡迎回來";
}else{
    echo "這是你第一次到網站";
}

?>