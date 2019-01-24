<?php
include('cekuser.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>LOGIN USER</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
</head>
<body>
                <center><h1>LOGIN SEBAGAI USER</h1>
				
				<p>NIM <i><?php 
				echo $_SESSION['nim']; ?></i></p>
				
				<p>Pilih Jawaban yang menggambarkan diri anda ataupun mendekati gambaran diri anda.</p>
				<br>
				
				<center><h2><a href="../soal/tutor.php">Saya Mengerti!</a></h2></center>

				<br>
				<a href="../logout.php">LOGOUT</a></center>
               
            
</body>
</html>