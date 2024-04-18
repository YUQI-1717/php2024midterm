<?php
session_start();

$_SESSION["check"]="Yes";

if($_SESSION["check"]=="Yes"){
    echo "成功進入chair網頁";
    echo"<a href='logout.php'>登出</a>";
}

?>