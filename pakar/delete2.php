<?php
session_start();
include "../connection.php";
$no = $_GET["id"];
	mysqli_query($connection, "delete from batas_pakar where id_batas='$no'");
  header('location:edit_batas.php');