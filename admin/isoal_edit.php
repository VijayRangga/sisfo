<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Buat Soal</title>
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
<script>
function dis()
{
    document.add_soalpg.pil_c.disabled=true;
}
</script>
<body>
<?php

session_start();
require('../connection.php');
$nox = $_SESSION["id"];
$soaln=$_SESSION["soalxx"];
$pila=$_SESSION["pili_a"];  
$pilb=$_SESSION["pili_b"];
$pilc=$_SESSION["pili_c"];
$poina=$_SESSION["poina"];
$poinb=$_SESSION["poinb"];
$poinc=$_SESSION["poinc"];

// If form submitted, insert values into the database.
    if (isset($_REQUEST['no'])){
		$no = stripslashes($_REQUEST['no']); // removes backslashes
		$no = mysqli_real_escape_string($connection,$no); //escapes special characters in a string
		$soalx = stripslashes($_REQUEST['soalxy']);
		$soalx = mysqli_real_escape_string($connection,$soalx);
		$pili_a = stripslashes($_REQUEST['pil_a']);
		$pili_a = mysqli_real_escape_string($connection,$pili_a);
		$pili_b = stripslashes($_REQUEST['pil_b']);
		$pili_b = mysqli_real_escape_string($connection,$pili_b);
		$pili_c = stripslashes($_REQUEST['pil_c']);
		$pili_c = mysqli_real_escape_string($connection,$pili_c);
		$poin_a = stripslashes($_REQUEST['poin_a']);
		$poin_a = mysqli_real_escape_string($connection,$poin_a);
        $poin_b = stripslashes($_REQUEST['poin_b']);
		$poin_b = mysqli_real_escape_string($connection,$poin_b);
        $poin_c = stripslashes($_REQUEST['poin_c']);
		$poin_c = mysqli_real_escape_string($connection,$poin_c);
        $query = "UPDATE soal_pakar SET no='$no',soalx='$soalx',pilihan_a='$pili_a',pilihan_b='$pili_b',pilihan_c='$pili_c',poin_a='$poin_a',poin_b='$poin_b',poin_c='$poin_c' WHERE no='$no' ";
        $result = mysqli_query($connection,$query);
        if($result){
            echo "<h3>Soal berhasil diedit.</h3><br/>Klik disini untuk melanjutkan<a href='edit_soal.php'>Tambah Soal</a>";
        }
        else{
        	echo "<h3>Data tidak valid.</h3><br/>Klik disini untuk melanjutkan<a href='edit_soal.php'>Edit Soal</a>";
        }
    }else{
?>


<!--CONTOH KODING IFRAME OK!!!!!!
<iframe src="https://www.malasngoding.com" height="500px" width="1000px"></iframe>
-->

<form action="" method="post" name="add_soalpg">
<table name="soal_pg" >
<tr><td>
Nomor*
<input type="text" name="no" size="1" maxlength="3" value=<?php echo $nox; ?> readonly required>
<br><br>
Pertanyaan
<br>
<textarea type="text" name="soalxy" required><?php echo $soaln; ?></textarea>
<br><br>
Jawaban :
<br>
Pilihan A
<textarea name="pil_a"><?php echo $pila; ?></textarea>
Poin A<input type="text" name="poin_a" size="1" maxlength="1" value=<?php echo $poina; ?>>
<br>
Pilihan B
<textarea name="pil_b"><?php echo $pilb; ?></textarea>
Poin B<input type="text" name="poin_b" size="1" maxlength="1" value=<?php echo $poinb; ?>>
<br>
Pilihan C
<textarea name="pil_c"><?php echo $pilc; ?></textarea>
Poin C<input type="text" name="poin_c" size="1" maxlength="1" value=<?php echo $poinc; ?>>
<br><br>
	<div align="left"><input type="submit" name="submit" value="Simpan">
	</div>
</td></tr>
</table>
</form>
<a href="edit_ptybts.php" style="text-decoration: none"><input type="button" name="back" value="Batal"></a>
<?php } ?>
</body>
</html>