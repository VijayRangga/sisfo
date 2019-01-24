<?php
session_start();
if($_SESSION){
    if($_SESSION['level']=="USER")
    {
        header("Location: user/haluser.php");
    }
    if($_SESSION['level']=="PAKAR")
    {
        header("Location: pakar/halpakar.php");
    }
    if($_SESSION['level']=="ADMIN")
    {
        header("Location: admin/form_admin.php");
    }
}


include('login.php'); 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<title>Login</title>
<meta name="viewport" content="width=device-width , initial-scale=1">
</head>

<body bgcolor="white">
<table width="950" border="0" align="center" cellspacing="0">
<tr>
	<td bgcolor="black" width="50" height="188"> <h1 style=" background-color:white; margin-bottom: 21px; text-align:center; font-size:59px; font-family:'Monotype Corsiva'; ">TUGAS SISTEM PAKAR</h1></td>
</tr>

<tr>
	<td align="center" ><br>
    <h1 style=". background-color: #232323; text-shadow: 0 0 5px black, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #FFF, 0 0 30px black, 0 0 40px #FFF, 0 0 55px black, 0 0 75px black">FORM LOGIN</h1>
    
	<table  border="5" cellspacing="0" width="600">
	<tr>
		<td bgcolor="white" valign="center" align="center" width="225" height="225">
			<a href="Daftar_login.php" title="Masuk ke Daftar LOGIN"> <img src="gambar/2.JPG" width="90%">
		</td>
		<td bgcolor="white" valign="center" align="center" ><br>
		<form name="login" action="" method="POST" >
		<font ><h5>Silahkan Masukan Username dan Password !. jika anda belum mempunyai akun login silahkan klik ikon (Buat Akun) untuk bisa masuk ke Form Lain</h5>
			<table>
			<tr>
				<td><b>Username:</td>
				<td><input name="username" type="text" size="20" /></td>
			</tr>
			<tr>
				<td><b>Password:</td>
				<td><input name="password" type="password" size="20" /></td>
			</tr>
			

			<tr>
				<td align="center"><input type="submit" name="login" value="Login" /></td></tr>
			</tr>
			</table>
		</form>
		</td>
	</tr>
	</table><br>
	</td>
</tr>
<tr>
    <td height="70" bgcolor="black"><div align="center"><font color="white" style="font-family: Algerian; ">Informatika B &copy; Copyright</font></div></td>
</tr>
</table>  
</body>
</html>