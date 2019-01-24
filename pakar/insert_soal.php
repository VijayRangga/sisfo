<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Buat Soal</title>
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
<script>
function rev_bs()
{
	document.pg_add.hidden=true;
	document.bs_add.hidden=false;
}
function rev_skt()
{
	document.pg_add.hidden=true;
	document.bs_add.hidden=true;
}
function rev_pg()
{
	document.pg_add.hidden=false;
	document.bs_add.hidden=true;
}
</script>
<body>

<!--CONTOH KODING IFRAME OK!!!!!!
<iframe src="https://www.malasngoding.com" height="500px" width="1000px"></iframe>
-->

<center><table width="255" border="3" >
<h1 style=".background-color: #232323; text-shadow: 0 0 5px white, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #FFF, 0 0 30px black, 0 0 40px #FFF, 0 0 55px black, 0 0 75px black; text-decoration:underline; text-transform:uppercase; padding-bottom:7px;">PILIH JENIS PERTANYAAN</h1>
<tr>
<td><input type="radio" name="pty" value="pg" onclick="rev_pg()" checked="true">Pilihan Ganda
<input type="radio" name="pty" value="bs" onclick="rev_bs()" >Benar/Salah
<!--<input type="radio" name="pty" value="skt" onclick="rev_skt()" >Pilihan Bercabang-->
</table>

<br><br>

<form name="pg_add">
<table width="777" border="3" >
<tr>
<td>
<iframe src="isoal_pg.php" height="320px" width="100%"></iframe></td></tr>
</table>
</form>

<form name="bs_add" hidden>
<table width="777" border="3" >
<tr>
<td><iframe src="isoal_bs.php" height="320px" width="100%"></iframe></td></tr>
</table>
</form><br>
<a href="halpakar.php" style="text-decoration: none"><input type="button" name="back" value="Keluar"></a>.<a href="edit_soal.php" style="text-decoration: none"><input type="button" name="edt" value="Edit Soal"></a>
</body>
</html>