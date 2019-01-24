<?php
session_start();
if(!isset($_SESSION['username'])){
    die("Anda belum login");
}
  include('../connection.php');

  $qtanya=mysqli_query($connection, "select * from soal_pakar order by no");
  $_SESSION['jmlrecord']=mysqli_num_rows($qtanya);
  {
    //$_SESSION['urut']=1;
    $_SESSION['point']=0;
    //$qt=mysql_query("select * from pertanyaan limit 1");
    $id_pertanyaan=mysqli_fetch_array($qtanya);
    $_SESSION["urut"]=$id_pertanyaan["no"];
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>QUIZ JEMBEL</title>
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
  <body>
  <center>
  	<h1><u>Seberapa Jembel (Tidak Menyenagkan) Diri Anda?</u></h1>
    </center><center>
    <table width="85%" align="justify" border="0"><td>
    <font size="5">Apakah Anda jmbel? Baiklah, pertama-tama kita harus paham betul apakah "jembel itu. Dalam kamus dikatakan, "jorok, tidak rapi, tidak menyenangkan, memuakkan, keras". "Jembel" adalah kata-kata slang yang berarti "keterlaluan", "pada selera rendah", "standar rendah", "pada mutu rendah", atau "bodoh, dungu, bebal". Sekarang jika Anda sedang mati-matian untuk menemukan Rating Perialku Jembel Anda, maka Anda harus mengisi kuis ilmiah berikut ini.</font></td></table>
    <br><br>
    <h2><a href="soalnya.php">Mulai Kuis</a></h2></center>
	</form>
  </body>
  </html>