<html>
<head>
<meta charset="utf8">
<title>論文評論網頁</title>
<h1><B>Reviewer您好，歡迎進入論文評論網頁</h1></B>
</head>

<form action="showreview.php" method="post">

論文評審決定：
<input type="radio" name="sDecision" value="Accept" checked>accept
<input type="radio" name="sDecision" value="Minor Revision">minor revision
<input type="radio" name="sDecision" value="Major Revision">major revision
<input type="radio" name="sDecision" value="Reject">reject
<br/>

論文評論評語：
<textarea name="sComment" value="" rows="20" cols="50">
</textarea>

<br/>
<br/>
<input type="submit" value="提交">

</form>

<?php
session_start();

if($_SESSION["check"]=="Yes"){
    echo"<a href='logout.php'>登出</a>";
}


?>