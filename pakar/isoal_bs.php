<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Buat Soal</title>
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
<body>
<?php
    require('../connection.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['no'])){
        $no = stripslashes($_REQUEST['no']); // removes backslashes
        $no = mysqli_real_escape_string($connection,$no); //escapes special characters in a string
        $soalx = stripslashes($_REQUEST['soalx']);
        $soalx = mysqli_real_escape_string($connection,$soalx);
        $poin_a = stripslashes($_REQUEST['poin_a']);
        $poin_a = mysqli_real_escape_string($connection,$poin_a);
        $poin_b = stripslashes($_REQUEST['poin_b']);
        $poin_b = mysqli_real_escape_string($connection,$poin_b);
        $query = "INSERT into `soal_pakar` (no, soalx, pilihan_a, pilihan_b, poin_a, poin_b) VALUES ('$no', '$soalx', 'Benar','Salah','$poin_a','$poin_b')";
        $result = mysqli_query($connection,$query);
        if($result){
            echo "<h3>Soal berhasil ditambah.</h3><br/>Klik disini untuk melanjutkan<a href='isoal_bs.php'>Tambah Soal</a>";
        }
        else{
            echo "<h3>Data tidak valid.</h3><br/>Klik disini untuk melanjutkan<a href='isoal_bs.php'>Tambah Soal</a>";
        }
    }else{
?>


<!--CONTOH KODING IFRAME OK!!!!!!
<iframe src="https://www.malasngoding.com" height="500px" width="1000px"></iframe>
-->

<form action="" method="post" name="add_soalbs">
<table name="soal_bs" >
<tr><td>
Nomor*
<input type="text" name="no" size="1" maxlength="3" required>
<br><br>
Pertanyaan
<br>
<textarea name="soalx" required></textarea>
<br><br>
Jawaban :
<br>
<input type="text" name="pil_a" value="Benar" readonly>
Poin Benar<input type="text" name="poin_a" size="1" maxlength="1">
<br>
<br>
<input type="text" name="pil_b" value="Salah" readonly>
Poin Salah<input type="text" name="poin_b" size="1" maxlength="1">
<br><br>
    <div align="left"><input type="submit" name="submit" value="Simpan">
    </div>
</td></tr>
</table>
</form>
<?php } ?>
</body>
</html>