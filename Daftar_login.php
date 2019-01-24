<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<title>Daftar login</title>
</head>
<script>
function user()
{
	document.ok.nim.hidden = false;
	document.getElementById('a').style.display='';
}
function pakar()
{
	document.ok.nim.hidden = true;
	
	document.getElementById('a').style.display='none';
}
</script>
<body bgcolor="white">
	<?php
	require('connection.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($connection,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($connection,$password);
		$level1 = stripslashes($_REQUEST['levels']);
		$level1 = mysqli_real_escape_string($connection,$level1);
		$nim = stripslashes($_REQUEST['nim']);
		$nim = mysqli_real_escape_string($connection,$nim);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($connection,$email);
        $query = "INSERT into `tabel_pakar` (username, password, level, nim,email) VALUES ('$username', '$password', '$level1','$nim','$email')";
        $result = mysqli_query($connection,$query);
        if($result){
            echo "<script>
				alert('Data berhasil di tambahkan');
				document.location.href = 'index.php';
			</script>";
        }
    }else{
?>

<br><br>
<br><br>
<table border="3" valign="center" align="center" border="1" cellspacing="0"  width="499">
	<tr bgcolor="white">
		<td valign="center" align="center" height="39">DAFTAR LOGIN</td>
	<tr bgcolor="white">
		<td valign="center" align="center" width="325" height="439">
			
			<form name="ok" action="" method="post">
			<div id='a'><label name='hilang'> Nim :</label></div>
			<input name="nim" type="text" />
			<div> Username :</div>
			<input name="username" type="text" />
			<div> Password :</div>
			<input name="password" type="password" />
			<div> Email :</div>
			<input name="email" type="text" />
			<div>LEVEL :</div>
			<input <input type="radio" name="levels" value="USER" onclick="user()">USER <input type="radio" name="levels" value="PAKAR" onclick="pakar()">PAKAR<br><br>
			<input type="submit" value="Register" style="color: green;"><br>
			</form>
			<button style="margin-top: 3px"><a href="index.php" style="text-decoration:none; font-color: green;"><font size= "2"color="black">Back Login</font></a></button>

		</td>		
			
 <?php } ?>
</body>
</html>