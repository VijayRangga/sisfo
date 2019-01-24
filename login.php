<?php

$error=''; 

include "connection.php";
if(isset($_POST['login']))
{   
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    
          
    $query = mysqli_query($connection, "SELECT * FROM tabel_pakar WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 0)
    {
        echo"<script language='javascript'>alert('Username / Password Salah'); document.location='index.php';</script>";
    }
    else

    {   
        session_start();
        $row = mysqli_fetch_assoc($query);
        $_SESSION['username']=$row['username'];
        $_SESSION['level'] = $row['level'];
        $_SESSION['nim'] = $row['nim'];
        $_SESSION['point'] = $row['nilai'];
        $_SESSION['email'] = $row['email'];


        $hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
        $tgl_now = $hari[date("w")].date(", d-M-Y H:i:s");
        $query2 = "UPDATE tabel_pakar SET login_terakhir='$tgl_now' WHERE username='$_SESSION[username]'";
        $result2 = mysqli_query($connection,$query2);

        if($row['nilai'] !="")
        {
            header("Location: soal/cekhasil_login.php");
        }
        
        else if($row['level'] == "PAKAR")
        {
            
            header("Location: pakar/halpakar.php");
        }
        else if($row['level'] =="USER")
        {
            header("Location: user/haluser.php");
        }
        else if($row['level'] =="ADMIN")
        {
            header("Location: admin/form_admin.php");
        }
        else
        {
            echo"<script>alert('Login Gagal!')</script>";  
        }
    }
}



?>