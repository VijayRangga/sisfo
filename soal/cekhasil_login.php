<?php
include "../connection.php";
session_start();

    if($_SESSION['point']!="")
    {
      header("Location: hasilnya.php");
    }
    else 
    {
      header("Location: ../user/haluser.php"); 
    }
    ?>