<?php
session_start();
include "../connection.php";
$no = $_GET["id"];
	mysqli_query($connection, "delete from soal_pakar where no='$no'");
  header('location:edit_soal.php');