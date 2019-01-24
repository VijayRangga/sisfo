<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah User</title>

    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
<script>
    function p(){
        document.add_user.nim.disabled=true
        document.add_user.nilai.disabled=true
        document.add_user.nim.value=""
        document.add_user.nilai.value=""
    }
    function u(){
        document.add_user.nim.disabled=false
        document.add_user.nilai.disabled=false
    }
</script>
<body>
<?php
	require('../connection.php');
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
        
        $query = "INSERT into `tabel_pakar` (id, username, password, level, nim, email, nilai) VALUES ('$no', '$usn','$pw','$lv','$nim','$email','$nilai')";
        $result = mysqli_query($connection,$query);
        if($result){
            echo "<h3>User berhasil ditambah.</h3><br/>Klik disini untuk melanjutkan<a href='edit_user.php'>Tambah User</a>";
        }
        else{
            
        	echo "<h3>Data tidak valid.</h3><br/>Klik disini untuk melanjutkan<a href='edit_user.php'>Tambah User</a>";
            
            return true;
        }
    }else{
?>


<!--CONTOH KODING IFRAME OK!!!!!!
<iframe src="https://www.malasngoding.com" height="500px" width="1000px"></iframe>
-->


<form action="" method="post" name="add_user">
<table width="555" border="3" align="center" >
    <h1 align="center">TAMBAH USER</h1>
<tr>
<td>ID*</td><td>:</td><td>
<input type="text" name="id" size="1" maxlength="4"></td>
</tr>
<tr>
<td>Username</td><td>:</td><td>
<input type="text" name="usn" required></td>
</tr>
<tr>
<td>Password</td><td>:</td><td>
<input type="text" name="pw" required></td>
</tr>
<tr>
<td>Level</td><td>:</td><td>
<input type="radio" name="lv" value="USER" onclick=u() required>USER
<input type="radio" name="lv" value="PAKAR" onclick=p() required>PAKAR</td>
</tr>
<tr>
<td>NIM</td><td>:</td><td>
<input type="text" name="nim"></td>
</tr>
<tr>
<td>Email</td><td>:</td><td>
<input type="text" name="email" required></td>
</tr>
<tr>
<td>Nilai</td><td>:</td><td>
<input type="text" name="nilai"></td>
</tr><tr>
<br><br><td>
	<div align="left"><input class="its" type="submit" name="submit" value="Simpan"></td>
    </tr>
    <td><a href="edit_user.php" style="text-decoration: none"><input class="its" type="button" name="back" value="Batal"></a></td>
	</div>
</td></tr>
</table>
</form>
<?php } ?>
</body>
</html>