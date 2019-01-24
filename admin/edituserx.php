<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit User</title>
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
<body>
<?php
require('../connection.php');
session_start();
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['id'])){
		$no = stripslashes($_REQUEST['id']); // removes backslashes
		$no = mysqli_real_escape_string($connection,$no); //escapes special characters in a string
		$usn = stripslashes($_REQUEST['usn']);
		$usn = mysqli_real_escape_string($connection,$usn);
		$pw = stripslashes($_REQUEST['pw']);
		$pw = mysqli_real_escape_string($connection,$pw);
		$lv = stripslashes($_REQUEST['lv']);
		$lv = mysqli_real_escape_string($connection,$lv);
		$nim = stripslashes($_REQUEST['nim']);
		$nim = mysqli_real_escape_string($connection,$nim);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($connection,$email);
        $nilai = stripslashes($_REQUEST['nilai']);
		$nilai = mysqli_real_escape_string($connection,$nilai);
        
        $query = "UPDATE `tabel_pakar` SET id='$no', username='$usn', password='$pw', level='$lv', nim='$nim', email='$email', nilai='$nilai' WHERE id='$no'";
        $result = mysqli_query($connection,$query);
        if($result){
            echo "<h3>User berhasil diedit.</h3><br/>Klik disini untuk melanjutkan<a href='edit_user.php'> Edit User</a>";
        }
        else{
        	echo "<h3>Data tidak valid.</h3><br/>Klik disini untuk melanjutkan<a href='edit_user.php'> Edit User</a>";
        }
    }else{
?>


<!--CONTOH KODING IFRAME OK!!!!!!
<iframe src="https://www.malasngoding.com" height="500px" width="1000px"></iframe>
-->

<form action="" method="post" name="add_soalpg">
<table name="soal_pg" >
<tr>
<td>ID*</td><td>:</td><td>
<input type="text" name="id" style="width: 20px;" value=<?php echo $_SESSION['id']; ?> required></td>
</tr>
<tr>
<td>Username</td><td>:</td><td>
<input type="text" name="usn" value=<?php echo $_SESSION['usn']; ?> required></td>
</tr>
<tr>
<td>Password</td><td>:</td><td>
<input type="text" name="pw" value=<?php echo $_SESSION['psw']; ?> required></td>
</tr>
<tr>
<td>Level</td><td>:</td><td>
<input type="radio" name="lv" value="USER" required>USER
<input type="radio" name="lv" value="PAKAR" required>PAKAR</td>
</tr>
<tr>
<td>NIM</td><td>:</td><td>
<input type="text" name="nim" value=<?php echo $_SESSION['nim']; ?> required></td>
</tr>
<tr>
<td>Email</td><td>:</td><td>
<input type="text" name="email" value=<?php echo $_SESSION['imel']; ?> required></td>
</tr>
<tr>
<td>Nilai</td><td>:</td><td>
<input type="text" name="nilai" value=<?php echo $_SESSION['nilai']; ?>></td>
</tr><tr>
<br><br><td>
	<div align="left"><input type="submit" name="submit" value="Simpan"></td>
    </tr>
    <td><a href="edit_user.php" style="text-decoration: none"><input type="button" name="back" value="Batal"></a></td>
	</div>
</td></tr>
</table>
</form>
<?php } ?>
</body>
</html>