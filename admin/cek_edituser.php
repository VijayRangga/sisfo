<?php
session_start();
require('../connection.php');
$_GET["id"];
$_GET["usn"];
$_GET["psw"];  
$_GET["lvl"];
$_GET["nim"];
$_GET["imel"];
$_GET["nilai"];
$_SESSION['id']=$_GET["id"];
$_SESSION['usn']=$_GET["usn"];
$_SESSION['psw']=$_GET["psw"];
$_SESSION['lvl']=$_GET["lvl"];
$_SESSION['nim']=$_GET["nim"];
$_SESSION['imel']=$_GET["imel"];
$_SESSION['nilai']=$_GET["nilai"];

header("Location: edituserx.php");

?>