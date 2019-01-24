<?php
session_start();
require('../connection.php');
$_GET["id"];
$_GET["soalxx"];
$_GET["pili_a"];  
$_GET["pili_b"];
$_GET["pili_c"];
$_GET["poina"];
$_GET["poinb"];
$_GET["poinc"];
$_SESSION['id']=$_GET["id"];
$_SESSION['soalxx']=$_GET["soalxx"];
$_SESSION['pili_a']=$_GET["pili_a"];
$_SESSION['pili_b']=$_GET["pili_b"];
$_SESSION['pili_c']=$_GET["pili_c"];
$_SESSION['poina']=$_GET["poina"];
$_SESSION['poinb']=$_GET["poinb"];
$_SESSION['poinc']=$_GET["poinc"];
if($_GET['pili_c'] == "")
        {
            header("Location: isoal_edit2.php");
        }
else{
	header("Location: isoal_edit.php");
}
?>