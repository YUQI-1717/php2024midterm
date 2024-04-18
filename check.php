<?php
session_start();
?>

<html>
<meta charset="utf-8">

<?php
$sID="chair";
$sPwd="123";
$sRole="Chair";

$sID2="reviewer";
$sPwd2="234";
$sRole2="Reviewer";

$sID3="author";
$sPwd3="345";
$sRole3="Author";


$uID=$_GET["uID"];
$uPwd=$_GET["uPwd"];
$uRole=$_GET["uRole"];

if($sID==$uID && $sPwd==$uPwd && $sRole==$uRole>){
    setcookie("userName",$uID,time()+604800);
    $_SESSION["check"]="Yes";
    header("Location:chair.php");
    }
if($sID2==$uID && $sPwd2==$uPwd && $sRole2==$uRole>){
    setcookie("userName",$uID,time()+604800);
    $_SESSION["check"]="Yes";
    header("Location:reviewer.php");
    }
if($sID3==$uID && $sPwd3==$uPwd && $sRole3==$uRole>){
    setcookie("userName",$uID,time()+604800);
    $_SESSION["check"]="Yes";
    header("Location:author.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}
ob_flush();

?>