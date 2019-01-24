<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");
}
if($_SESSION['username']!="admin"){
    die("Anda bukan ADMIN");
}
?>