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


<input type="radio" name="pty" value="pg" onclick="rev_pg()" checked="true">Pilihan Ganda
<input type="radio" name="pty" value="bs" onclick="rev_bs()" >Benar/Salah
<!--<input type="radio" name="pty" value="skt" onclick="rev_skt()" >Pilihan Bercabang-->
<br><hr><br>
<form name="pg_add">
<iframe src="isoal_pg.php" height="410px" width="40%"></iframe>
</form>
<form name="bs_add" hidden>
<iframe src="isoal_bs.php" height="410px" width="40%"></iframe>
</form>
<a href="form_admin.php" style="text-decoration: none"><input type="button" name="back" value="Keluar"></a><a href="edit_ptybts.php" style="text-decoration: none"><input type="button" name="edt" value="Edit Soal"></a>
</body>
</html>