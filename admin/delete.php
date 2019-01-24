<?php
session_start();
include "../connection.php";
$no = $_GET["id"];
	mysqli_query($connection, "delete from tabel_pakar where id='$no'");
  header('location:edit_user.php');
  ?>