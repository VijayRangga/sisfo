<?php
session_start();
include "../connection.php";
$no = $_GET["id"];
	mysqli_query("delete from soal_pakar where no='$no'",$connection);
  header('location:edit_ptybts.php');
 ?>