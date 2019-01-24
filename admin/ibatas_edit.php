<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Batas</title>
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
<body>
<?php
session_start();
require('../connection.php');
$nox = $_GET["id"];
$ket = $_GET["kterangan"];
$btsbw = $_GET["bts_bw"];  
$btsat = $_GET["bts_at"];

    // If form submitted, insert values into the database.
    if (isset($_REQUEST['id_batas'])){
		$no = stripslashes($_REQUEST['id_batas']); // removes backslashes
		$no = mysqli_real_escape_string($connection,$no); //escapes special characters in a string
		$ciri = stripslashes($_REQUEST['ciri_ciri']);
		$ciri = mysqli_real_escape_string($connection,$ciri);
		$bts_bwh = stripslashes($_REQUEST['bts_bwh']);
		$bts_bwh = mysqli_real_escape_string($connection,$bts_bwh);
		$bts_ats = stripslashes($_REQUEST['bts_ats']);
		$bts_ats = mysqli_real_escape_string($connection,$bts_ats);
        $query = "UPDATE batas_pakar SET id_batas='$no',ciri_ciri='$ciri',batas_bawah='$bts_bwh',batas_atas='$bts_ats' WHERE id_batas='$nox'";
        $result = mysqli_query($connection,$query);
        if($result){
            echo "<h3>Batas berhasil diedit.</h3><br/>Klik disini untuk melanjutkan<a href='edit_ptybts.php'>Edit Batas</a>";
        }
        else{
        	echo "<h3>Data tidak valid.</h3><br/>Klik disini untuk melanjutkan<a href='edit_ptybts.php'>Edit Batas</a>";
        }
    }else{
?>


<!--CONTOH KODING IFRAME OK!!!!!!
<iframe src="https://www.malasngoding.com" height="500px" width="1000px"></iframe>
-->

<form action="" method="post" name="add_batasx">
<table name="batasx" >
<tr><td>
ID BATAS*
<input type="text" name="id_batas" size="1" maxlength="3" value=<?php echo $nox; ?> readonly required>
<br><br>
Keterangan
<br>
<textarea name="ciri_ciri" required><?php echo $ket; ?></textarea>
<br>
<br>
<table>
<tr>
<td>Batas Bawah</td>
<td><input type="text" name="bts_bwh" size="2" maxlength="2" value=<?php echo $btsbw; ?> required></td>
</tr>
<br>
<tr>
<td>Batas Atas</td>
<td><input type="text" name="bts_ats" size="2" maxlength="2" value=<?php echo $btsat; ?> required></td>
</tr>
</table>
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