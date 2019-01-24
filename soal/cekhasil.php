<?php
include "../connection.php";
session_start();
mysqli_query($connection, "update tabel_pakar set nilai='$_SESSION[point]' where username='$_SESSION[username]'");
    $query1 = mysqli_query($connection, "SELECT * FROM batas_pakar WHERE id_batas='1'");
    $row1 = mysqli_fetch_assoc($query1);
     $query2 = mysqli_query($connection, "SELECT * FROM batas_pakar WHERE id_batas='2'");
     $row2 = mysqli_fetch_assoc($query2);
    $query3 = mysqli_query($connection, "SELECT * FROM batas_pakar WHERE id_batas='3'");
    $row3 = mysqli_fetch_assoc($query3);

    if($_SESSION['point']<=$row1['batas_atas'] and $_SESSION['point']>=$row1['batas_bawah'])
    {
      header("Location: hasil1.php");
    }
    else if($_SESSION['point']>=$row2['batas_bawah'] and $_SESSION['point']<=$row2['batas_atas'])
    {
       header("Location: hasil2.php");
    }
    else if($_SESSION['point']>=$row3['batas_bawah'] and $_SESSION['point']<=$row3['batas_atas'])
    {
       header("Location: hasil3.php");
    }
    else
    {
      header("Location: ../logout.php");
    }
    ?>  